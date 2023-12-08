<form
    class="modal fade"
    id="modalEdit"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
    method="POST"
    action=""
    onsubmit="return validateEditForm();"
>
    @csrf
    @method('PUT')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5">
                    Edit Reservation
                </h5>
                <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="pt-0 row g-2">
                    <div id="error-clientEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-serviceEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-adultTotalEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-childTotalEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-startDateEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-endDateEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-hourStartEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-hourEndEdit" class="text-danger" style="display: none;"></div>
                    <div id="error-totalEdit" class="text-danger" style="display: none;"></div>

                    <div class="mb-4">
                        <label for="selectClientEdit" class="form-label">Client</label>
                        <select name="client_id" id="selectClientEdit" class="select2-icons form-select">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                            @endforeach
                        </select>
                        <div id="error-clientEdit" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="mb-4">
                        <label for="selectServiceEdit" class="form-label">Service</label>
                        <select name="service_id" id="selectServiceEdit" class="select2-icons form-select">
                            @foreach ($services as $categoryName => $servicesInCategory)
                                <optgroup label="{{ $categoryName }}">
                                    @foreach ($servicesInCategory as $service)
                                        <option
                                            value="{{ $service->id }}"
                                            data-adult-price="{{ $service->adultPrice }}"
                                            data-children-price="{{ $service->childPrice }}"
                                        >
                                            {{ $service->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        <div id="error-serviceEdit" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="mb-3">
                        <x-input-field label="How many adults will go?" id="adultTotalEdit" name="adultTotal" placeholder="Adults" type="number" />
                        <div id="error-adultTotalEdit" class="text-danger" style="display: none;"></div>
                        <x-input-field label="How many children will go?" id="childTotalEdit" name="childTotal" placeholder="Children" type="number" />
                        <div id="error-childTotalEdit" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input
                            type="date"
                            id="startDateEdit"
                            name="start_date"
                            class="form-control"
                        />
                        <span class="input-group-text">To</span>
                        <input
                            type="date"
                            id="endDateEdit"
                            name="end_date"
                            class="form-control"
                        />
                        <div id="error-startDateEdit" class="text-danger" style="display: none;"></div>
                        <div id="error-endDateEdit" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input
                            type="time"
                            id="hourStartEdit"
                            name="start_hour"
                            class="form-control"
                        />
                        <span class="input-group-text">To</span>
                        <input
                            type="time"
                            id="hourEndEdit"
                            name="end_hour"
                            class="form-control"
                        />
                        <div id="error-hourStartEdit" class="text-danger" style="display: none;"></div>
                        <div id="error-hourEndEdit" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="mb-3">
                        <label for="totalEdit" class="form-label">Total</label>
                        <input type="text" name="total" id="totalEdit" class="form-control" readonly>
                        <div id="error-totalEdit" class="text-danger" style="display: none;"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">
                        <i class="menu-icon ti ti-pencil"></i>
                        <span> Edit </span>
                    </button>
                    <button
                        type="reset"
                        class="btn btn-outline-secondary text-reset"
                        data-bs-dismiss="modal"
                        aria-label="Cancel"
                    >
                        <i class="menu-icon ti ti-x"></i>
                        <span> Cancel </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function validateEditForm() {
        resetEditErrorMessages();

        var clientId = document.getElementById('selectClientEdit').value;
        var serviceId = document.getElementById('selectServiceEdit').value;
        var adultTotal = document.getElementById('adultTotalEdit').value;
        var childTotal = document.getElementById('childTotalEdit').value;
        var startDateEdit = document.getElementById('startDateEdit').value;
        var endDateEdit = document.getElementById('endDateEdit').value;
        var hourStartEdit = document.getElementById('hourStartEdit').value;
        var hourEndEdit = document.getElementById('hourEndEdit').value;
        var totalEdit = document.getElementById('totalEdit').value;

        var isValid = true;

        if (clientId === '') {
            displayEditError('error-clientEdit', 'Client is required.');
            isValid = false;
        }

        if (serviceId === '') {
            displayEditError('error-serviceEdit', 'Service is required.');
            isValid = false;
        }

        if (adultTotal === '') {
            displayEditError('error-adultTotalEdit', 'Number of adults is required.');
            isValid = false;
        }

        if (childTotal === '') {
            displayEditError('error-childTotalEdit', 'Number of children is required.');
            isValid = false;
        }

        if (startDateEdit === '') {
            displayEditError('error-startDateEdit', 'Start date is required.');
            isValid = false;
        }

        if (endDateEdit === '') {
            displayEditError('error-endDateEdit', 'End date is required.');
            isValid = false;
        }

        if (hourStartEdit === '') {
            displayEditError('error-hourStartEdit', 'Start hour is required.');
            isValid = false;
        }

        if (hourEndEdit === '') {
            displayEditError('error-hourEndEdit', 'End hour is required.');
            isValid = false;
        }

        if (totalEdit === '') {
            displayEditError('error-totalEdit', 'Total is required.');
            isValid = false;
        }

        if (!isValid) {
            return false;
        }
        return true;
    }

    function resetEditErrorMessages() {
        var errorElements = document.querySelectorAll('[id^="error-"]');
        errorElements.forEach(function (element) {
            element.style.display = 'none';
            element.innerText = '';
        });
    }

    function displayEditError(elementId, errorMessage) {
        var errorElement = document.getElementById(elementId);
        errorElement.style.display = 'block';
        errorElement.innerText = errorMessage;
    }
</script>
