<div class="container row">
    <div class="col-12">
        <div class="card mb-4">
            <div
                class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4"
            >
                <div class="mt-n2 mx-sm-0 mx-auto">
                    <img
                        src="{{ asset('assets/img/avatars/14.png') }}"
                        alt="user image"
                        class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"
                    />
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div
                        class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4"
                    >
                        <div class="user-profile-info">
                            <h4>Angel Daniel Almanza Trejo</h4>
                            <ul
                                class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2"
                            >
                                <li class="list-inline-item d-flex gap-1">
                                    <i class="ti ti-map-pin"></i> San Jose del
                                    Cabo, Los Cabos, Baja California Sur, Mexico
                                </li>
                                <li class="list-inline-item d-flex gap-1">
                                    <i class="ti ti-calendar"></i>
                                    joined in April 2021
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-datatable table-responsive">
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>Reservation</th>
                <th>Date</th>
                <th>State</th>
                <th>Operator</th>
                <th>In charge</th>
                <th></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <tr>
                <td>
                    {{--
                    <i class="ti ti-brand-angular ti-lg text-info me-3"></i>
                    --}} {{--
                    <a href="{{ route('services', 'Motor') }}"> </a> --}}
                    <span class="fw-medium">Cambio de Aceite</span>
                </td>
                <td>2022-03-21</td>
                <td><span class="btn btn-success">Completado</span></td>
                <td>Alan</td>
                <td>Duverney</td>
                <td></td>
                <td>
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
                        <i class="ti ti-eye"></i>
                    </button>
                </td>
            </tr>

            <tr>
                <td>
                    {{--
                    <i class="ti ti-brand-angular ti-lg text-info me-3"></i>
                    --}} {{--
                    <a href="{{ route('services', 'Motor') }}"> </a> --}}
                    <span class="fw-medium">Cambio de Rines</span>
                </td>
                <td>2024-01-11</td>
                <td><span class="btn btn-info">En espera</span></td>
                <td>Almanza</td>
                <td>Eduardo</td>
                <td></td>
                <td>
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
                        <i class="ti ti-eye"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal  delete -->
<div
    class="modal fade"
    id="modalDelete"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
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
                <button type="button" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal delete -->
