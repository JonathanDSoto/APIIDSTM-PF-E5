<div class="modal fade" id="addNewCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Category</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.store') }}" method="POST" class="addNewCategory pt-0 row g-2"
                    id="form-addNewCategory">
                    @csrf
                    @method('POST')
                    <x-input-field
                        label="Name"
                        id="name"
                        name="name"
                        placeholder="Name of category"
                    />
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">
                            Save
                        </button>
                        <button type="reset" class="btn btn-outline-secondary text-reset" data-bs-dismiss="modal"
                            aria-label="Cancel">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="offcanvas-body flex-grow-1">
    </div>
</div>
