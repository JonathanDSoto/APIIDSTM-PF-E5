<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- ...existing code... -->

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Motor -->
        <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>

        <!-- Services -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-wrench"></i>
                <div>Services</div>
                <i class="menu-arrow ti ti-angle-right"></i>
            </a>

            <ul class="menu-sub">
                <li
                    class="menu-item {{ request()->is('motors') ? 'active' : '' }}"
                >
                    <a href="{{ route('motors') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-engine"></i>
                        <div>Motor Service</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                    <a href="{{ route('motors') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-car"></i>
                        <div>Tire Service</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- ...existing code... -->
    </ul>
</aside>
