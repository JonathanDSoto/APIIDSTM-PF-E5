<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
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
        <li
            class="menu-item {{ Request::is('services/*') ? 'active open' : '' }}"
        >
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-engine"></i>
                <div>Services</div>
                <i class="menu-arrow ti ti-angle-right"></i>
            </a>

            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('services/motor') ? 'active' : '' }}"
                >
<<<<<<< HEAD
                    <a href="{{ route('service.index') }}" class="menu-link">
=======
                    <a
                        {{-- href="{{ route('services', 'motor') }}" --}}
                        class="menu-link"
                    >
>>>>>>> e219604eaa6cb524804907644b51b2c1a542db58
                        <div>Motor Service</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::is('services/refaccion') ? 'active' : '' }}"
                >
<<<<<<< HEAD
                    <a href="{{ route('service.index') }}" class="menu-link">
=======
                    <a
                        {{-- href="{{ route('services', 'refaccion') }}" --}}
                        class="menu-link"
                    >
>>>>>>> e219604eaa6cb524804907644b51b2c1a542db58
                        <div>Refaccion Service</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::is('services/neumatico') ? 'active' : '' }}"
                >
<<<<<<< HEAD
                    <a href="{{ route('service.index') }}" class="menu-link">
=======
                    <a
                        {{-- href="{{ route('services', 'neumatico') }}" --}}
                        class="menu-link"
                    >
>>>>>>> e219604eaa6cb524804907644b51b2c1a542db58
                        <div>Neumatico Service</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::is('services/electrico') ? 'active' : '' }}"
                >
<<<<<<< HEAD
                    <a href="{{ route('service.index') }}" class="menu-link">
=======
                    <a
                        {{-- href="{{ route('services', 'electrico') }}" --}}
                        class="menu-link"
                    >
>>>>>>> e219604eaa6cb524804907644b51b2c1a542db58
                        <div>Electrico Service</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chart-bar"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
<<<<<<< HEAD
        <!-- cliente -->
        <li class="menu-item {{ request()->is('client') ? 'active' : '' }}">
            <a href="{{ route('client.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Clients">Clients</div>
            </a>
        </li>
=======
>>>>>>> e219604eaa6cb524804907644b51b2c1a542db58
    </ul>
</aside>
