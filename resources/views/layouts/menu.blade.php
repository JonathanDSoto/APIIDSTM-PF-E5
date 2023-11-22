<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Motor -->
        <li class="menu-item {{ request()->is('motors') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-engine"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>

        <!-- Services -->
        <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-wrench"></i>
                <div>Services</div>
                <i class="menu-arrow ti ti-angle-right"></i>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                    <a
                        href="{{ route('services', 'Refacciones') }}"
                        class="menu-link"
                    >
                        <i class="menu-icon tf-icons ti ti-engine"></i>
                        <div>Motor Service</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                    <a
                        href="{{ route('services', 'Refaccion') }}"
                        class="menu-link"
                    >
                        <i class="menu-icon tf-icons ti ti-car"></i>
                        <div>Refaccion Service</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                    <a
                        href="{{ route('services', 'Neumatico') }}"
                        class="menu-link"
                    >
                        <i class="menu-icon tf-icons ti ti-car"></i>
                        <div>Neumatico Service</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                    <a
                        href="{{ route('services', 'Electrico') }}"
                        class="menu-link"
                    >
                        <i class="menu-icon tf-icons ti ti-car"></i>
                        <div>Electrico Service</div>
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
        <!-- cliente -->
        <li class="menu-item {{ request()->is('clients') ? 'active' : '' }}">
            <a href="{{ route('clients') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Clients">Clients</div>
            </a>
        </li>
    </ul>
</aside>
