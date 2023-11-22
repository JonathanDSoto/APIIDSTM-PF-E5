<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template"
>
    <head>
        @include('layouts.head')
        <title>Client</title>
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('layouts.menu')
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    @include('layouts.navbar')

                    <!-- Content wrapper -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>Clients</h1>

                        <!-- table detail -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <!-- DataTable with Buttons -->
                            <div class="card">
                                <div
                                    class="card-datatable table-responsive pt-0"
                                >
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        '
                                        <table class="table">
                                            <tr>
                                                <td class="col-1"></td>
                                                <td></td>
                                                <td>1</td>
                                                <td>sdfdv</td>
                                                <td>dxfdsf</td>
                                                <td>esfsdf</td>
                                                <td>drgdg</td>
                                            </tr>
                                        </table>
                                    </table>
                                </div>
                            </div>
                            <!-- Modal to add new record -->
                            <div
                                class="offcanvas offcanvas-end"
                                id="add-new-record"
                            >
                                <div class="offcanvas-header border-bottom">
                                    <h5
                                        class="offcanvas-title"
                                        id="exampleModalLabel"
                                    >
                                        New Record
                                    </h5>
                                    <button
                                        type="button"
                                        class="btn-close text-reset"
                                        data-bs-dismiss="offcanvas"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="offcanvas-body flex-grow-1">
                                    <form
                                        class="add-new-record pt-0 row g-2"
                                        id="form-add-new-record"
                                        onsubmit="return false"
                                    >
                                        <div class="col-sm-12">
                                            <label
                                                class="form-label"
                                                for="basicFullname"
                                            >
                                                Name
                                            </label>
                                            <div
                                                class="input-group input-group-merge"
                                            >
                                                <span
                                                    id="basicFullname2"
                                                    class="input-group-text"
                                                >
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <input
                                                    type="text"
                                                    id="name"
                                                    class="form-control dt-name"
                                                    name="name"
                                                    placeholder="John"
                                                    aria-label="John"
                                                    aria-describedby="basicFullname2"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label
                                                class="form-label"
                                                for="LastName"
                                                >Last Name</label
                                            >
                                            <div
                                                class="input-group input-group-merge"
                                            >
                                                <span
                                                    id="basicPost2"
                                                    class="input-group-text"
                                                    ><i class="ti ti-user"></i
                                                ></span>
                                                <input
                                                    type="text"
                                                    id="LastName"
                                                    name="LastName"
                                                    class="form-control dt-last-name"
                                                    placeholder="McLoving"
                                                    aria-label="McLoving"
                                                    aria-describedby="basicPost2"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label
                                                class="form-label"
                                                for="Email"
                                                >Email</label
                                            >
                                            <div
                                                class="input-group input-group-merge"
                                            >
                                                <span class="input-group-text"
                                                    ><i class="ti ti-mail"></i
                                                ></span>
                                                <input
                                                    type="text"
                                                    id="Email"
                                                    name="Email"
                                                    class="form-control dt-email"
                                                    placeholder="john.doe@example.com"
                                                    aria-label="john.doe@example.com"
                                                />
                                            </div>
                                            <div class="form-text">
                                                You can use letters, numbers &
                                                periods
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button
                                                type="submit"
                                                class="btn btn-primary data-submit me-sm-3 me-1"
                                            >
                                                Submit
                                            </button>
                                            <button
                                                type="reset"
                                                class="btn btn-outline-secondary"
                                                data-bs-dismiss="offcanvas"
                                            >
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/ DataTable with Buttons -->
                        </div>
                        <!-- /table detail  -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="{{
                asset('assets/vendor/libs/jquery/jquery.js')
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
                asset(
                    'assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
                )
            }}"></script>

        <!-- Form Validation -->
        <script src="{{
                asset(
                    'assets/vendor/libs/@form-validation/umd/bundle/popular.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js'
                )
            }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/js/table-clients.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
