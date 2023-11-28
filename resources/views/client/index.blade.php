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
                {{-- @include('layouts.menu') --}}
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    {{-- @include('layouts.navbar') --}}

                    <!-- Content wrapper -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>Clients</h1>

                        <!-- table detail -->
                        <div class="card container table-data my-5 p-3">
                            <div
                                class="container container-p-y d-flex justify-content-between gap-2"
                            >
                                <div>
                                    <select
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option selected value="5">5</option>
                                        <option value="15">15</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search"
                                    />
                                </div>
                                <button
                                    class="dt-button create-new btn btn-primary"
                                    aria-controls="DataTables_Table_0"
                                    tabindex="0"
                                    type="button"
                                >
                                    <i class="ti ti-plus"></i>
                                </button>
                            </div>
                            <div class="card-datatable overflow-auto">
                                <table class="table table-hover">
                                    <thead class="table-border-bottom-0">
                                        <tr>
                                            <th>
                                                <input
                                                    type="checkbox"
                                                    name="all"
                                                    id="all"
                                                />
                                            </th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input
                                                    type="checkbox"
                                                    name="all"
                                                    id="all"
                                                />
                                            </td>
                                            <td>1</td>
                                            <td>
                                                {{-- <a
                                                    href="{{
                                                        route('client.show')
                                                    }}"
                                                >
                                                    Angel Daniel
                                                </a> --}}
                                            </td>
                                            <td>Almanza Trejo</td>
                                            <td>trejo@gmail.com</td>
                                            <td class="actions">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger p-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalDelete"
                                                >
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-primary p-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEdit"
                                                >
                                                    <i class="ti ti-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /table detail  -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Modal  delete -->
            <div
                class="modal fade"
                id="modalDelete"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Are you sure to delete this user?
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body col">
                            <span class="row"> ID: <strong>1</strong> </span>
                            <span class="row">
                                Name:
                                <strong>Angel Daniel</strong>
                            </span>
                            <span class="row">
                                Last name:
                                <strong>Almanza Trejo</strong>
                            </span>
                            <span class="row">
                                Email:
                                <strong>trejo@gmail.com</strong>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal delete -->

            <!-- Modal  edit -->
            <div
                class="modal fade"
                id="modalEdit"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Edit User
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label
                                        for="name-edit"
                                        class="col-form-label"
                                    >
                                        Name:
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name-edit"
                                        placeholder="Juan"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="last-name-edit"
                                        class="col-form-label"
                                    >
                                        Message:
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="last-name-edit"
                                        placeholder="Hernadez"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="email-edit"
                                        class="col-form-label"
                                    >
                                        Email:
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email-edit"
                                        placeholder="juan@example.com"
                                    />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Send message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal edit -->

            <!-- Create new user -->
            <div class="offcanvas offcanvas-end" id="add-new-user">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="exampleModalLabel">
                        New User
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
                        class="add-new-user pt-0 row g-2"
                        id="form-add-new-user"
                        onsubmit="return false"
                    >
                        <div class="col-sm-12">
                            <label class="form-label" for="name">Name</label>
                            <div class="input-group input-group-merge">
                                <span
                                    id="basicFullname2"
                                    class="input-group-text"
                                    ><i class="ti ti-user"></i
                                ></span>
                                <input
                                    type="text"
                                    id="name"
                                    class="form-control dt-name"
                                    name="name"
                                    placeholder="John Doe"
                                    aria-label="John Doe"
                                    aria-describedby="basicFullname2"
                                />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="last-name">
                                Last name
                            </label>
                            <div class="input-group input-group-merge">
                                <span id="basicPost2" class="input-group-text">
                                    <i class="ti ti-user"></i>
                                </span>
                                <input
                                    type="text"
                                    id="last-name"
                                    name="last-name"
                                    class="form-control dt-last-name"
                                    placeholder="Hernadez"
                                    aria-label="Hernadez"
                                    aria-describedby="basicPost2"
                                />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="email">
                                Email
                            </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"
                                    ><i class="ti ti-mail"></i
                                ></span>
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    class="form-control dt-email"
                                    placeholder="john.doe@example.com"
                                    aria-label="john.doe@example.com"
                                />
                            </div>
                            <div class="form-text">
                                You can use letters, numbers & periods
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button
                                type="submit"
                                class="btn btn-primary data-submit me-sm-3 me-1"
                            >
                                Save
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
            <!-- /Create new user -->
        </div>
        <!-- / Layout wrapper -->
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        @include('layouts.scripts')

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
        <script>
            var clientShowUrl = "{{ e(route('client.show')) }}";
        </script>
        <script src="{{ asset('assets/js/table-clients.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
