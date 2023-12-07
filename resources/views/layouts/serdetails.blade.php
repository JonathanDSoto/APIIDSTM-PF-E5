<div class="p-1" style="max-width: 540px">
    <div class="row">
        <div class="col-md-4">
            <img
                src="{{ asset('assets/img/machape/Logo.png') }}"
                class="img-fluid rounded-start"
            />
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                </p>
                <p class="card-text">
                    <small class="text-muted">Cost: $</small>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- table detail -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-3">
        <div class="card-header pt-2">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item">
                    <button
                        class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#form-tabs-inproccess"
                        aria-selected="true"
                    >
                        En proceso
                    </button>
                </li>
                <li class="nav-item">
                    <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#form-tabs-performed"
                        aria-selected="false"
                        tabindex="-1"
                    >
                        Completados
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content card-datatable table-responsive">
            <div
                class="tab-pane fade active show"
                id="form-tabs-inproccess"
                role="tabpanel"
            >
                <h2 class="card-header">Reservaciones</h2>
                <table class="table">
                    <thead>
                        <tr class="text-no-wrap">
                            <th>#</th>
                            <th>Servicio</th>
                            <th>Cliente</th>
                            <th>Fecha inicio</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-content card-datatable table-responsive">
            <div
                class="tab-pane fade active show"
                id="form-tabs-performed"
                role="tabpanel"
            >
                <h2 class="card-header">Reservations</h2>
                <table class="table">
                    <thead>
                        <tr class="text-no-wrap">
                            <th>#</th>
                            <th>Service</th>
                            <th>Client</th>
                            <th>start date</th>
                            <th>Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Cambio de aceite</th>
                            <th>Filomeno Pancresio</th>
                            <th>22/11/2023</th>
                            <th>$4000</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
