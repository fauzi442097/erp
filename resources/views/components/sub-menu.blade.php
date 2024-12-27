<!--begin:Menu sub-->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    @if ($menu->icon)
        <!-- Menu Level 2 -->
        <span class="menu-link">
            <span class="menu-icon">
                <i class="{{ $menu->icon }} fs-2"></i>
            </span>
            <span class="menu-title">{{ $menu->name }}</span>
            <span class="menu-arrow"></span>
        </span>
    @else
        <span class="menu-link">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">{{ $menu->name }}</span>
            <span class="menu-arrow"></span>
        </span>
    @endif

    <div class="menu-sub menu-sub-accordion">
        @foreach ($menu->children as $subMenu)
            @if ($subMenu->children->isEmpty())
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ $subMenu->url }}" title="{{ $subMenu->name }}"
                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ $subMenu->name }}</span>
                    </a>
                    <!--end:Menu link-->
                </div>
            @else
                <x-sub-menu :menu="$subMenu" />
            @endif
        @endforeach
    </div>
</div>
