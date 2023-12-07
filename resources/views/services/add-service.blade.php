<div
    class="modal fade"
    id="addNewService"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Service</h2>
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
                    <div class="col-sm-12">
                        <label for="formFile" class="form-label">
                            Select an image to your service
                        </label>
                        <div class="input-group input-group-merge">
                            <input
                                class="form-control"
                                type="file"
                                id="formFile"
                            />
                        </div>
                    </div>
                    <x-input-field
                        label="Name"
                        id="name"
                        name="name"
                        placeholder="Name"
                    />
                    <x-input-field
                        label="Description"
                        id="resume"
                        name="resume"
                        placeholder="Description"
                    />
                    <div class="row p-1">
                        <div class="col">
                            <x-input-field
                                label="Adult Price"
                                id="adultPrice"
                                name="adultPrice"
                                placeholder="Adult Price"
                                type="number"
                            />
                        </div>
                        <div class="col">
                            <x-input-field
                                label="Child Price"
                                id="childPrice"
                                name="childPrice"
                                placeholder="Child Price"
                                type="number"
                            />
                        </div>
                    </div>

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
                        value="{{ $category->id }}"
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
