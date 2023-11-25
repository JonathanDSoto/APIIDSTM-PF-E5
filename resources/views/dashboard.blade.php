<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
>
    <head>
        <title>Dashboard</title>
        @include('layouts.head')
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('layouts.menu')
                <!-- /Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    @include('layouts.navbar')
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="py-3 mb-4">
                                <span class="text-muted fw-light">
                                    Logistics /
                                </span>
                                Dashboard
                            </h4>

                            <!-- Card Border Shadow -->
                            <div class="row">
                                <h4 class="text-muted">On Services</h4>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div
                                        class="card card-border-shadow-primary"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center mb-2 pb-1"
                                            >
                                                <div class="avatar me-2">
                                                    <span
                                                        class="avatar-initial rounded bg-label-primary"
                                                        ><i
                                                            class="ti ti-car ti-md"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <h4 class="ms-1 mb-0">
                                                    Model car
                                                </h4>
                                            </div>
                                            <p class="mb-1">Type service</p>
                                            <p class="mb-0">
                                                <span class="fw-medium me-1">
                                                    Entry: <small>00:00</small>
                                                </span>
                                                -
                                                <span class="text-muted">
                                                    Exit: <small>00:00</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div
                                        class="card card-border-shadow-primary"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center mb-2 pb-1"
                                            >
                                                <div class="avatar me-2">
                                                    <span
                                                        class="avatar-initial rounded bg-label-primary"
                                                        ><i
                                                            class="ti ti-car ti-md"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <h4 class="ms-1 mb-0">
                                                    Model car
                                                </h4>
                                            </div>
                                            <p class="mb-1">Type service</p>
                                            <p class="mb-0">
                                                <span class="fw-medium me-1">
                                                    Entry: <small>00:00</small>
                                                </span>
                                                -
                                                <span class="text-muted">
                                                    Exit: <small>00:00</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div
                                        class="card card-border-shadow-primary"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center mb-2 pb-1"
                                            >
                                                <div class="avatar me-2">
                                                    <span
                                                        class="avatar-initial rounded bg-label-primary"
                                                        ><i
                                                            class="ti ti-car ti-md"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <h4 class="ms-1 mb-0">
                                                    Model car
                                                </h4>
                                            </div>
                                            <p class="mb-1">Type service</p>
                                            <p class="mb-0">
                                                <span class="fw-medium me-1">
                                                    Entry: <small>00:00</small>
                                                </span>
                                                -
                                                <span class="text-muted">
                                                    Exit: <small>00:00</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div
                                        class="card card-border-shadow-primary"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center mb-2 pb-1"
                                            >
                                                <div class="avatar me-2">
                                                    <span
                                                        class="avatar-initial rounded bg-label-primary"
                                                        ><i
                                                            class="ti ti-car ti-md"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <h4 class="ms-1 mb-0">
                                                    Model car
                                                </h4>
                                            </div>
                                            <p class="mb-1">Type service</p>
                                            <p class="mb-0">
                                                <span class="fw-medium me-1">
                                                    Entry: <small>00:00</small>
                                                </span>
                                                -
                                                <span class="text-muted">
                                                    Exit: <small>00:00</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Card Border Shadow -->
                            <div class="row">
                                <!-- Services-->
                                <div class="col-lg-6 w-100 order-3 order-xxl-1">
                                    <div class="card">
                                        <div
                                            class="card-header d-flex align-items-center justify-content-between"
                                        >
                                            <div class="card-title mb-0">
                                                <h5 class="m-0 me-2">
                                                    Services
                                                </h5>
                                                <small class="text-muted">
                                                    Total number of services
                                                    23.8k
                                                </small>
                                            </div>
                                            <div class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-label-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                    January
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >January</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >February</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >March</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >April</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >May</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >June</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >July</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >August</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >September</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >October</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >November</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item"
                                                            href="javascript:void(0);"
                                                            >December</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="graphServices"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Services -->

                                <!-- Delivery Performance -->
                                <div
                                    class="col-lg-6 col-xxl-4 mb-4 order-2 order-xxl-2"
                                >
                                    <div class="card h-100">
                                        <div
                                            class="card-header d-flex align-items-center justify-content-between mb-2"
                                        >
                                            <div class="card-title mb-0">
                                                <h5 class="m-0 me-2">
                                                    Monthly earnings
                                                </h5>
                                                <small class="text-muted">
                                                    12% increase in this month
                                                </small>
                                            </div>
                                            <div class="dropdown">
                                                <button
                                                    class="btn p-0"
                                                    type="button"
                                                    id="deliveryPerformance"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i
                                                        class="ti ti-dots-vertical"
                                                    ></i>
                                                </button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="deliveryPerformance"
                                                >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Select All</a
                                                    >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Refresh</a
                                                    >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Share</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="p-0 m-0">
                                                <li class="d-flex mb-4 pb-1">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-primary"
                                                            ><i
                                                                class="ti ti-engine"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Repairs
                                                            </h6>
                                                            <small
                                                                class="text-danger fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-down mb-1"
                                                                ></i>
                                                                25.8%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                10k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mb-4 pb-1">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-info"
                                                        >
                                                            <i
                                                                class="fa-solid fa-oil-can"
                                                            ></i>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Maintenance
                                                            </h6>
                                                            <small
                                                                class="text-success fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-up mb-1"
                                                                ></i>
                                                                4.3%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                5k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mb-4 pb-1">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-success"
                                                            ><i
                                                                class="ti ti-circle-check"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Change tires
                                                            </h6>
                                                            <small
                                                                class="text-danger fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-down mb-1"
                                                                ></i>
                                                                12.5%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                15k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mb-4 pb-1">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-warning"
                                                            ><i
                                                                class="ti ti-percentage"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Tire repair
                                                            </h6>
                                                            <small
                                                                class="text-success fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-up mb-1"
                                                                ></i>
                                                                35.6%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                10k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mb-4 pb-1">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-secondary"
                                                        >
                                                            <i
                                                                class="ti ti-bolt"
                                                            ></i>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Electric system
                                                            </h6>
                                                            <small
                                                                class="text-danger fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-down mb-1"
                                                                ></i>
                                                                2.15%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                10k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex">
                                                    <div
                                                        class="avatar flex-shrink-0 me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded bg-label-danger"
                                                            ><i
                                                                class="ti ti-users"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                                                    >
                                                        <div class="me-2">
                                                            <h6
                                                                class="mb-0 fw-normal"
                                                            >
                                                                Oil change
                                                            </h6>
                                                            <small
                                                                class="text-success fw-normal d-block"
                                                            >
                                                                <i
                                                                    class="ti ti-chevron-up mb-1"
                                                                ></i>
                                                                5.7%
                                                            </small>
                                                        </div>
                                                        <div
                                                            class="user-progress"
                                                        >
                                                            <h6 class="mb-0">
                                                                10k
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Delivery Performance -->

                                <!-- On route vehicles Table -->

                                <div class="col-12 order-5">
                                    <div class="card">
                                        <div
                                            class="card-header d-flex align-items-center justify-content-between"
                                        >
                                            <div class="card-title mb-0">
                                                <h5 class="m-0 me-2">
                                                    On route vehicles
                                                </h5>
                                            </div>
                                            <div class="dropdown">
                                                <button
                                                    class="btn p-0"
                                                    type="button"
                                                    id="routeVehicles"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i
                                                        class="ti ti-dots-vertical"
                                                    ></i>
                                                </button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="routeVehicles"
                                                >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Select All</a
                                                    >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Refresh</a
                                                    >
                                                    <a
                                                        class="dropdown-item"
                                                        href="javascript:void(0);"
                                                        >Share</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-datatable table-responsive"
                                        >
                                            <table class="tableServices table">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Mechanic</th>
                                                        <th>Type service</th>
                                                        <th>Car model</th>
                                                        <th>Decription</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <th>2323</th>
                                                    <th>Juan Perez</th>
                                                    <th>Repair</th>
                                                    <th>Nissan</th>
                                                    <th>
                                                        <div
                                                            class="accordion"
                                                            id="accordionExample"
                                                        >
                                                            <div
                                                                class="accordion-item"
                                                            >
                                                                <h2
                                                                    class="accordion-header"
                                                                    id="headingOne"
                                                                >
                                                                    <button
                                                                        class="accordion-button"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne"
                                                                    >
                                                                        Whatch
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div
                                                                        class="accordion-body"
                                                                    >
                                                                        Lorem,
                                                                        ipsum
                                                                        dolor
                                                                        sit amet
                                                                        consectetur
                                                                        adipisicing
                                                                        elit.
                                                                        Illum,
                                                                        unde
                                                                        distinctio
                                                                        aspernatur
                                                                        a quam
                                                                        exercitationem,
                                                                        harum
                                                                        veritatis
                                                                        quis
                                                                        quia
                                                                        laudantium
                                                                        fugit
                                                                        laborum,
                                                                        deleniti
                                                                        porro
                                                                        eum
                                                                        reprehenderit!
                                                                        Recusandae
                                                                        voluptatum
                                                                        atque
                                                                        quo.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>$1222</th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--/ On route vehicles Table -->
                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl">
                                <div
                                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
                                >
                                    <div>
                                        ©
                                        <script>
                                            document.write(
                                                new Date().getFullYear()
                                            );
                                        </script>
                                        , made with ❤️ by
                                        <a
                                            href="https://pixinvent.com"
                                            target="_blank"
                                            class="fw-medium"
                                            >Pixinvent</a
                                        >
                                    </div>
                                    <div class="d-none d-lg-inline-block">
                                        <a
                                            href="https://themeforest.net/licenses/standard"
                                            class="footer-link me-4"
                                            target="_blank"
                                            >License</a
                                        >
                                        <a
                                            href="https://1.envato.market/pixinvent_portfolio"
                                            target="_blank"
                                            class="footer-link me-4"
                                            >More Themes</a
                                        >

                                        <a
                                            href="{{
                                                asset('documentation/')
                                            }}index.html"
                                            target="_blank"
                                            class="footer-link me-4"
                                            >Documentation</a
                                        >

                                        <a
                                            href="https://pixinvent.ticksy.com/"
                                            target="_blank"
                                            class="footer-link d-none d-sm-inline-block"
                                            >Support</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="{{
                asset('assets/vendor/libs/jquery/jquery.js')
            }}"></script>
        <script src="{{
                asset('assets/vendor/libs/popper/popper.js')
            }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{
                asset('assets/vendor/libs/node-waves/node-waves.js')
            }}"></script>
        <script src="{{
                asset(
                    'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'
                )
            }}"></script>
        <script src="{{
                asset('assets/vendor/libs/hammer/hammer.js')
            }}"></script>
        <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{
                asset('assets/vendor/libs/typeahead-js/typeahead.js')
            }}"></script>
        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{
                asset('assets/vendor/libs/apex-charts/apexcharts.js')
            }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{
                asset('assets/js/app-logistics-dashboard.js')
            }}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
