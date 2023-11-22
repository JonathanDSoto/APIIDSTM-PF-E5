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
                                    <i class="ti ti-map-pin"></i> San Jose del Cabo, Los Cabos, Baja California Sur, Mexico
                                </li>
                                <li class="list-inline-item d-flex gap-1">
                                    <i class="ti ti-calendar"></i> Se unio en Abril
                                    2021
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Reservaciones</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Operador</th>
            <th>Encargado</th>
            <th></th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        <tr>
            <td>
                {{-- <i class="ti ti-brand-angular ti-lg text-info me-3"></i> --}}
                {{-- <a href="{{ route('services', 'Motor') }}">
                    
                </a> --}}
                <span class="fw-medium">Cambio de Aceite</span>
            </td>
            <td>2022-03-21</td>
            <td><span class="btn btn-success">Completado</span></td>
            <td>Alan</td>
            <td>Duverney</td>
            <td></td>
            <td>
                <div class="text-center">
                    <div class="row">
                        <div class="col-6">
                            <a href="" class="btn btn-primary d-flex    ">Ver</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-danger d-flex">Eliminar</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                {{-- <i class="ti ti-brand-angular ti-lg text-info me-3"></i> --}}
                {{-- <a href="{{ route('services', 'Motor') }}">
                    
                </a> --}}
                <span class="fw-medium">Cambio de Rines</span>
            </td>
            <td>2024-01-11</td>
            <td><span class="btn btn-info">En espera</span></td>
            <td>Almanza</td>
            <td>Eduardo</td>
            <td></td>
            <td>
                <div class="text-center">
                    <div class="row">
                        <div class="col-6">
                            <a href="" class="btn btn-primary d-flex    ">Ver</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-danger d-flex">Eliminar</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
