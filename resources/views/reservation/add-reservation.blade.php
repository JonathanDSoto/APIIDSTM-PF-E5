<div
    class="modal fade"
    id="add-new-reservation"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Reservation</h2>
                <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form
                    action="{{ route('reservation.store') }}"
                    method="POST"
                    class="addNewReservation pt-0 row g-2"
                    id="form-addNewReservation"
                >
                    @csrf
                    @method('POST')

                    <div class="mb-4">
                        <label for="selectClient" class="form-label">Client</label>
                        <select name="client_id" id="selectClient" class="select2-icons form-select">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                            @endforeach
                        </select>
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
                    </div>

                    <div class="mb-3">
                        <x-input-field
                            label="How many adults will go?"
                            id="adultTotal"
                            name="adultTotal"
                            placeholder="Adults"
                            type="number"
                        />
                        <x-input-field
                            label="How many children will go?"
                            id="childTotal"
                            name="childTotal"
                            placeholder="Children"
                            type="number"
                        />
                    </div>

                    <!-- Date -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input
                            type="date"
                            id="datepicker"
                            name="start_date"
                            class="form-control"
                        />
                        <span class="input-group-text">To</span>
                        <input
                            type="date"
                            name="end_date"
                            class="form-control"
                        />
                    </div>
                    <!-- /Date -->

                    <!-- hours -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">From</span>
                        <input
                            type="time"
                            id="hour-start"
                            name="start_hour"
                            class="form-control"
                        />

                        <span class="input-group-text">To</span>
                        <input
                            type="time"
                            id="hour-end"
                            name="end_hour"
                            class="form-control"
                        />

                    </div>
                    <!-- /hours -->

                    <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="text" name="total" id="total" class="form-control" readonly>
                    </div>

                    <div class="col-sm-12">
                        <button
                            type="submit"
                            id="submitBtn"
                            class="btn btn-primary data-submit me-sm-3 me-1"
                        >
                            Save
                        </button>
                        <button
                            type="reset"
                            class="btn btn-outline-secondary text-reset"
                            data-bs-dismiss="modal"
                            aria-label="Cancel"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
