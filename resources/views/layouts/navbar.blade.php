<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
>
    <div
        id="hamburger-button"
        class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
    >
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div
        class="navbar-nav-right d-flex align-items-center"
        id="navbar-collapse"
        style="cursor: default;"
    >
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item">
                <div
                    class="nav-link hide-arrow"
                >
                    <div class="avatar avatar-online" style="cursor: default;">
                        <img
                            src="{{ asset('assets/img/avatars/1.png') }}"
                            alt
                            class="h-auto rounded-circle"
                        />
                    </div>
                </div>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{-- <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </div>
</nav>
