@foreach ($page->navigation[$version] as $title => $nav)
    <div class="nav__group">
        <a href="{{ $nav['url'] ?? $nav['prefix'] }}"
           class="nav__title {{ $page->isActive($nav['prefix']) ? 'nav__title--active' : '' }}"
           path="{{ $page->getPath() }}" prefix="{{ $nav['prefix'] }}">{{ $title }}</a>
        <div class="nav__items">
            @foreach ($nav['links'] as $title => $path)
                @if (isset($path['links']))
                    <a href="{{ $path['path'] }}"
                       class="nav__item {{ $page->isActive($path['path'])  ? 'nav__item--active' : '' }}">{{ $title }}</a>
                    <div class="nav__items">
                        @foreach($path['links'] as $childTitle => $childPath)
                            <a href="{{ $childPath }}"
                               class="nav__item {{ $page->isActive($childPath)  ? 'nav__item--active' : '' }}">{{ $childTitle }}</a>
                        @endforeach
                    </div>
                @else
                    <a href="{{ $path }}"
                       class="nav__item {{ $page->isActive($path)  ? 'nav__item--active' : '' }}">{{ $title }}</a>
                @endif
            @endforeach
        </div>
    </div>
@endforeach