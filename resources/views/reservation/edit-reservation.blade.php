<form
    class="modal fade"
    id="modalEdit"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
    method="POST"
    action=""
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
                    <div class="mb-4">
                        <label for="selectClientEdit" class="form-label">Client</label>
                        <select name="client_id" id="selectClientEdit" class="select2-icons form-select">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                            @endforeach
                        </select>
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
                    </div>

                    <div class="mb-3">
                        <x-input-field
                            label="How many adults will go?"
                            id="adultTotalEdit"
                            name="adultTotal"
                            placeholder="Adults"
                            type="number"
                        />
                        <x-input-field
                            label="How many children will go?"
                            id="childTotalEdit"
                            name="childTotal"
                            placeholder="Children"
                            type="number"
                        />
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
                    </div>

                    <div class="mb-3">
                        <label for="totalEdit" class="form-label">Total</label>
                        <input type="text" name="total" id="totalEdit" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button
                        type="submit"
                        class="btn btn-primary data-submit me-sm-3 me-1"
                    >
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
