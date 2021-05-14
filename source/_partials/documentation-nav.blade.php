@foreach ($page->navigation as $title => $nav)
    <div class="nav__group">
        <a href="{{ $nav['url'] ?? $nav['prefix'] }}"
           class="nav__title {{ $page->isActive($nav['prefix']) ? 'nav__title--active' : '' }}"
        path="{{ $page->getPath() }}" prefix="{{ $nav['prefix'] }}">{{ $title }}</a>
        <div class="nav__items">
            @foreach ($nav['links'] as $title => $path)
                <a href="{{ $path }}"
                   class="nav__item {{ $page->isActive($path)  ? 'nav__item--active' : '' }}">{{ $title }}</a>
            @endforeach
        </div>
    </div>
@endforeach