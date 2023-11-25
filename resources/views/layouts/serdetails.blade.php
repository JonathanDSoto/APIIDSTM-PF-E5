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
                <h5 class="card-title">Title</h5>
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
    </div>

    <!-- DataTable with Buttons -->
    {{--
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
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
                    <label class="form-label" for="basicFullname"
                        >Full Name</label
                    >
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"
                            ><i class="ti ti-user"></i
                        ></span>
                        <input
                            type="text"
                            id="basicFullname"
                            class="form-control dt-full-name"
                            name="basicFullname"
                            placeholder="John Doe"
                            aria-label="John Doe"
                            aria-describedby="basicFullname2"
                        />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicPost">Post</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"
                            ><i class="ti ti-briefcase"></i
                        ></span>
                        <input
                            type="text"
                            id="basicPost"
                            name="basicPost"
                            class="form-control dt-post"
                            placeholder="Web Developer"
                            aria-label="Web Developer"
                            aria-describedby="basicPost2"
                        />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">Email</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"
                            ><i class="ti ti-mail"></i
                        ></span>
                        <input
                            type="text"
                            id="basicEmail"
                            name="basicEmail"
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
                    <label class="form-label" for="basicDate"
                        >Joining Date</label
                    >
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"
                            ><i class="ti ti-calendar"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control dt-date"
                            id="basicDate"
                            name="basicDate"
                            aria-describedby="basicDate2"
                            placeholder="MM/DD/YYYY"
                            aria-label="MM/DD/YYYY"
                        />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">Salary</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text"
                            ><i class="ti ti-currency-dollar"></i
                        ></span>
                        <input
                            type="number"
                            id="basicSalary"
                            name="basicSalary"
                            class="form-control dt-salary"
                            placeholder="12000"
                            aria-label="12000"
                            aria-describedby="basicSalary2"
                        />
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
    --}}
    <!--/ DataTable with Buttons -->
</div>
<!-- /table detail  -->
