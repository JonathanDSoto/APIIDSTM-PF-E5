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
                    action="{{ route('service.store') }}"
                    method="POST"
                    class="addNewService pt-0 row g-2"
                    id="form-addNewService"
                >
                    @csrf @method('POST')
                    <x-input-field
                        label="Tittle"
                        id="tittle"
                        name="tittle"
                        placeholder="Tittle"
                    />
                    <div>
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea
                            class="form-control"
                            id="description"
                            rows="3"
                        ></textarea>
                    </div>
                    <!-- Date -->
                    <div class="input-group">
                        <span class="input-group-text">From</span>
                        <input
                            type="date"
                            id="datepicker"
                            class="form-control"
                        />

                        <span class="input-group-text">To</span>
                        <input type="date" class="form-control" />

                        <span class="input-group-text">
                            <input
                                class="form-check-input mt-0"
                                type="checkbox"
                                checked
                                aria-label="Checkbox for following text input"
                            />
                        </span>
                    </div>
                    <!-- /Date -->

                    <!-- hours -->
                    <div class="input-group">
                        <span class="input-group-text">From</span>
                        <input
                            type="time"
                            id="hour-start"
                            class="form-control"
                        />

                        <span class="input-group-text">To</span>
                        <input type="time" id="hour-end" class="form-control" />

                        <span class="input-group-text">
                            <input
                                class="form-check-input mt-0 invisible"
                                type="checkbox"
                            />
                        </span>
                    </div>
                    <!-- /hours -->
                    <input
                        type="hidden"
                        id="isActive"
                        class="form-check dt-resume ms-1"
                        name="is_active"
                        value="1"
                    />
                    <input
                        type="hidden"
                        id="availableDays"
                        class="form-control dt-resume"
                        name="available_days"
                        placeholder="available_days"
                        value="Lunes"
                    />
                    <input
                        type="hidden"
                        id="category_id"
                        class="form-control dt-resume"
                        name="category_id"
                        placeholder="category_id"
                    />
                    <div class="col-sm-12">
                        <button
                            type="submit"
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
