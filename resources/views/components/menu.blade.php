    @foreach ($menus as $menu)
        @if ($menu->children->isEmpty())
            <div class="menu-item">
                <a class="menu-link" href="{{ $menu->url }}">
                    <span class="menu-icon">
                        <i class="{{ $menu->icon }} fs-2"></i>
                    </span>
                    <span class="menu-title"> {{ $menu->name }}</span>
                </a>
            </div>
        @else
            <x-sub-menu :menu="$menu" />
        @endif
    @endforeach
