<div class="modal fade" id="add-new-reservation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Reservation</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('reservation.store') }}" method="POST" class="addNewReservation pt-0 row g-2" id="form-addNewReservation" onsubmit="return validateReservationForm();">
                    @csrf
                    @method('POST')

                    <!-- Add this after each input field -->
                    <div id="error-client" class="text-danger" style="display: none;"></div>
                    <div id="error-service" class="text-danger" style="display: none;"></div>
                    <div id="error-adultTotal" class="text-danger" style="display: none;"></div>
                    <div id="error-childTotal" class="text-danger" style="display: none;"></div>
                    <div id="error-datepicker" class="text-danger" style="display: none;"></div>
                    <div id="error-hour-start" class="text-danger" style="display: none;"></div>
                    <div id="error-hour-end" class="text-danger" style="display: none;"></div>
                    <div id="error-total" class="text-danger" style="display: none;"></div>

                    <div class="mb-4">
                        <label for="selectClient" class="form-label">Client</label>
                        <select name="client_id" id="selectClient" class="select2-icons form-select">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                            @endforeach
                        </select>
                        <!-- Display error for client -->
                        <div id="error-client" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="mb-4">
                        <label for="selectService" class="form-label">Service</label>
                        <select name="service_id" id="selectService" class="select2-icons form-select">
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
                        <!-- Display error for service -->
                        <div id="error-service" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="mb-3">
                        <x-input-field label="How many adults will go?" id="adultTotal" name="adultTotal" placeholder="Adults" type="number" value="{{ old('adultTotal') }}"/>
                        <!-- Display error for adultTotal -->
                        <div id="error-adultTotal" class="text-danger" style="display: none;"></div>
                        <x-input-field label="How many children will go?" id="childTotal" name="childTotal" placeholder="Children" type="number" value="{{ old('childTotal') }}"/>
                        <!-- Display error for childTotal -->
                        <div id="error-childTotal" class="text-danger" style="display: none;"></div>
                    </div>

                    <!-- Date -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input type="date" id="datepicker" name="start_date" class="form-control" value="{{ old('start_date') }}"/>
                        <span class="input-group-text">To</span>
                        <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}"/>
                        <!-- Display error for datepicker -->
                        <div id="error-datepicker" class="text-danger" style="display: none;"></div>
                    </div>
                    <!-- /Date -->

                    <!-- hours -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input type="time" id="hour-start" name="start_hour" class="form-control" value="{{ old('hour-start') }}"/>
                        <span class="input-group-text">To</span>
                        <input type="time" id="hour-end" name="end_hour" class="form-control" value="{{ old('hour-end') }}"/>
                        <!-- Display error for start_hour -->
                        <div id="error-hour-start" class="text-danger" style="display: none;"></div>
                        <!-- Display error for end_hour -->
                        <div id="error-hour-end" class="text-danger" style="display: none;"></div>
                    </div>
                    <!-- /hours -->

                    <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="text" name="total" id="total" class="form-control" readonly >
                        <!-- Display error for total -->
                        <div id="error-total" class="text-danger" style="display: none;"></div>
                    </div>

                    <div class="col-sm-12">
                        <button type="submit" id="submitBtn" class="btn btn-primary data-submit me-sm-3 me-1">Save</button>
                        <button type="reset" class="btn btn-outline-secondary text-reset" data-bs-dismiss="modal" aria-label="Cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateReservationForm() {
        resetErrorMessages();

        var clientId = document.getElementById('selectClient').value;
        var serviceId = document.getElementById('selectService').value;
        var adultTotal = document.getElementById('adultTotal').value;
        var childTotal = document.getElementById('childTotal').value;
        var startDate = document.getElementById('datepicker').value;
        var startHour = document.getElementById('hour-start').value;
        var endHour = document.getElementById('hour-end').value;
        var total = document.getElementById('total').value;

        var isValid = true;

        if (clientId === '') {
            displayError('error-client', 'Client is required.');
            isValid = false;
        }

        if (serviceId === '') {
            displayError('error-service', 'Service is required.');
            isValid = false;
        }

        if (adultTotal === '') {
            displayError('error-adultTotal', 'Number of adults is required.');
            isValid = false;
        }

        if (childTotal === '') {
            displayError('error-childTotal', 'Number of children is required.');
            isValid = false;
        }

        if (startDate === '') {
            displayError('error-datepicker', 'Start date is required.');
            isValid = false;
        }

        if (startHour === '') {
            displayError('error-hour-start', 'Start hour is required.');
            isValid = false;
        }

        if (endHour === '') {
            displayError('error-hour-end', 'End hour is required.');
            isValid = false;
        }

        if (total === '') {
            displayError('error-total', 'Total is required.');
            isValid = false;
        }

        if (!isValid) {
            return false;
        }
        return true;
    }

    function resetErrorMessages() {
        var errorElements = document.querySelectorAll('[id^="error-"]');
        errorElements.forEach(function (element) {
            element.style.display = 'none';
            element.innerText = '';
        });
    }

    function displayError(elementId, errorMessage) {
        var errorElement = document.getElementById(elementId);
        errorElement.style.display = 'block';
        errorElement.innerText = errorMessage;
    }
</script>
