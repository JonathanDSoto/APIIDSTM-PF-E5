<aside
    id="layout-menu"
    class="layout-menu position-fixed menu-vertical menu bg-menu-theme"
    style="z-index: +1; height: 100vh"
>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Motor -->
        <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>

        <!-- dashboard -->
        {{--
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chart-bar"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        --}}
        <!-- cliente -->
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
</aside>
<aside
    id="layout-menu"
    class="layout-menu menu-vertical menu bg-menu-theme"
    style="z-index: -1"
></aside>
