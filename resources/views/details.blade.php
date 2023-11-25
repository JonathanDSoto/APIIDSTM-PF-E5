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
        <title>Details</title>

        <!-- Vendors CSS -->

        <link
            rel="stylesheet"
            href="{{
                asset(
                    'assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css'
                )
            }}"
        />

        <!-- Form Validation -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'assets/vendor/libs/@form-validation/umd/styles/index.min.css'
                )
            }}"
        />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{
                asset('assets/vendor/js/template-customizer.js')
            }}"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/config.js') }}"></script>
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
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @include('layouts.serdetails')
                        </div>
                        <!-- / Content -->
                        <div class="content-backdrop fade"></div>
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
        <script src="{{ asset('assets/js/table-details.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
