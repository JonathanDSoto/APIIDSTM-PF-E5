<aside
    id="layout-menu"
    class="layout-menu position-fixed menu-vertical menu bg-menu-theme"
    style="z-index: +1; height: 100vh"
>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('client.index') ? 'active' : '' }}"
        >
            <a href="{{ route('client.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Clients">Clients</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('reservation.index') ? 'active' : '' }}"
        >
            <a href="{{ route('reservation.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar-event"></i>
                <div data-i18n="Reservations">Reservations</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('category.index') || request()->routeIs('category.show') ? 'active' : '' }}"
        >
            <a href="{{ route('category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-category-2"></i>
                <div data-i18n="Categories">Categories</div>
            </a>
        </li>
    </ul>
    <ul class="menu-inner py-2 justify-content-end">
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-logout"></i>
                <div data-i18n="Log Out">Log Out</div>
            </a>
        </li>
    </ul>
</aside>
<aside
    id="layout-menu"
    class="layout-menu menu-vertical menu bg-menu-theme"
    style="z-index: -1"
></aside>
