<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/home" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img
                    src="{{ asset('assets/img/machape/Logo.png') }}"
                    alt="auth-login-cover"
                    class="img-fluid my-4 auth-illustration"
                    style="width: 50px; height: auto"
                />
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Machape</span>
        </a>
        <a
            href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto"
        >
            <i
                class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"
            ></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Motor -->
        <li class="menu-item {{ request()->is('motors') ? 'active' : '' }}">
            <a href="/motors" class="menu-link">
                <i class="menu-icon tf-icons ti ti-engine"></i>

                <div data-i18n="Motors">Motors</div>
            </a>
        </li>

        <!-- tires -->
        <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Tires</div>
            </a>
        </li>
        <!-- Spare parts -->
        <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Spare parts</div>
            </a>
        </li>
        <!-- Electric -->
        <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Electric</div>
            </a>
        </li>
    </ul>
</aside>
