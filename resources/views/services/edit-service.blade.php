<form action="" method="POST" class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
    @csrf
    @method('PUT')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">
                    Edit Service
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                <x-input-field
                    label="Adult Price"
                    id="adultPrice"
                    name="adultPrice"
                    placeholder="Adult Price"
                    type="number"
                />
                <x-input-field
                    label="Child Price"
                    id="childPrice"
                    name="childPrice"
                    placeholder="Child Price"
                    type="number"
                />
                <input type="hidden" id="isActive" class="form-check dt-resume ms-1" name="is_active" value="1" />
                <input type="hidden" id="availableDays" class="form-control dt-resume" name="available_days"
                    placeholder="available_days" value="Lunes" />
                <input type="hidden" id="category_id" class="form-control dt-resume" name="category_id"
                    placeholder="category_id" value="{{ $category->id }}" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </div>
</form>
