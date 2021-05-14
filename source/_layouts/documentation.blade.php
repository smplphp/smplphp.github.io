@extends('_layouts.master')

@section('body')

    @include('_partials.main-header')

    <main class="docs">

        <aside class="docs__sidebar">
            <input type="search" class="docs__sidebar-search" placeholder="Search documentation">
            <nav class="nav--docs">

                @include('_partials.documentation-nav')

            </nav>
        </aside>

        <section class="docs__content DocSearch-content" v-pre>

            @yield('content')

        </section>

    </main>
@endsection
