---
title: Dependency Injection Container component
description: The SMPL dependency injection container component
extends: _layouts._versions.current
section: content
---

# Container {#container}

The SMPL container component provides dependency injection using modern PHP 8 attributes, allowing you to decouple
your classes and simplify the instantiation of objects.

 - [Requirements](#requirements)
 - [Installation](#installation)
 - [Usage](#usage)
    - [Resolving dependencies](#resolving-dependencies)
    - [Binding to the container](#binding-to-the-container)
      - [Class bindings](#class-bindings)
      - [Object bindings](#object-bindings)
      - [Method bindings](#method-bindings)
      - [Closure bindings](#closure-bindings)
      - [Function bindings](#function-bindings)

## Requirements {#requirements}

To run the container component you must be using at least PHP 8.0.

## Installation {#installation}

You can install the container using composer.

```bash
composer require smplphp/container
```

## Usage {#usage}

Using this component all starts with an instance of the container. The easiest way to get hold of one, is to use the
`getInstance()` method on the `Smpl\Container\Container` class.

```php
$container = \Smpl\Container\Container::getInstance();
```

### Resolving dependencies {#resolving-dependencies}

Once you have an instance of the container you're ready to start resolving dependencies.

To show you how the container works, let's take a look at these two example classes.

`AnotherClass` is a dependency that we need to resolve.

```php
class AnotherClass 
{
    public function getNumber(): int
    {
        return 1;
    }
}
```

And `MyClass` is the class that we want a new instance of.

```php
class MyClass 
{
    private AnotherClass $anotherClass;
    
    public function __construct(AnotherClass $anotherClass)
    {
        $this->anotherClass = $anotherClass;
    }
}
```

Because the `AnotherClass` has no external dependencies, the container is able to automatically create a new instance
of it without being told how. To get a new instance of `MyClass` we can just ask the container to resolve it.

```php
$myObject = $container->resolve(MyClass::class);
```

### Binding to the container {#binding-to-the-container}

Now, let's say that `AnotherClass` actually relies on a `NumberGenerator`, which is an interface.

```php
class AnotherClass 
{
    private NumberGenerator $generator;
    
    public function __construct(NumberGenerator $generator)
    {
        $this->generator = $generator;
    }
    
    public function getNumber(): int
    {
        return $this->generator->generateNumber();
    }
}
```

Since interfaces cannot be instantiated the container isn't able to create a new instance of `NumberGenerator`.

Let's say that amongst our implementations of `NumberGenerator` we have `RandomNumberGenerator`, which we want to be
the default implementation.

```php
class RandomNumberGenerator implements NumberGenerator
{
    public function generateNumber(): int
    {
        return rand();
    }
}
```

To make this so, we need to bind the `RandomNumberGenerator` to `NumberGenerator` within the container.

There are five ways that something can be bound to the container.

#### Class bindings {#class-bindings}

Luckily our `RandomNumberGenerator` has no dependencies, so the container is able to create a new instance on its own. 
To bind it to the container we can just use the class name.

```php
$container->bind(NumberGenerator::class, RandomNumberGenerator::class);
```

Now when the container requires an instance of `NumberGenerator`, it will create a new instance of `RandomNumberGenerator`.

#### Object bindings {#object-bindings}

Sometimes you will want to bind an object to the container. The benefit of this is that the container will always
return the same object when requested, and won't create a new instance each time.

To bind the `RandomNumberGenerator` to the container as an object can do the following.

```php
$container->bind(NumberGenerator::class, new RandomNumberGenerator);
```

#### Method bindings {#method-bindings}

Let's say that we have a number of different `NumberGenerator` implementations, and a `NumberGeneratorFactory` that
knows how to create each one. Instead of creating the instance ourself, we can tell the container to call a method on 
the factory to retrieve a new instance.

To do that we do the following.

```php
$container->bind(NumberGenerator::class, [NumberGeneratorFactory::class, 'random']);
```

Now when an instance of `NumberGenerator` is required, the container will call the `random` method on `NumberGeneratorFactory`.
This approach works for both static and non-static methods.

#### Closure bindings {#closure-bindings}

Sometimes you want to be specific and tell the container exactly how to create a new instance. In this situation you
can use a closure/anonymous function.

To do bind a closure to the container you can do the following.

```php
$container->bind(NumberGenerator::class, fn() => new RandomNumberGenerator);
```

Now when an instance of `NumberGenerator` is required, the closure will be ran and the result used as the dependency.

#### Function bindings {#function-bindings}

Let's say that you have a collection of helper functions that create new instances of your number generators, and the
`createRandomNumberGenerator()` function creates a new instance of the `RandomNumberGenerator` class. 

To bind this to the container you can do the following.

```php
$container->bind(NumberGenerator::class, 'createRandomNumberGenerator');
```