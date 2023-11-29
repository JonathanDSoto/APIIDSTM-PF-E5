<div class="modal fade" id="addNewService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Service</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.store') }}" method="POST" class="addNewService pt-0 row g-2"
                    id="form-addNewService">
                    @csrf
                    @method('POST')
                    <div class="col-sm-12">
                        <label class="form-label" for="name">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-category"></i></span>
                            <input type="text" id="name" class="form-control dt-name" name="name"
                                placeholder="Name" aria-label="Name" aria-describedby="basicFullname2" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="resume">Resume</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-category"></i></span>
                            <input type="text" id="resume" class="form-control dt-resume" name="resume"
                                placeholder="Resume" aria-label="Resume" aria-describedby="basicFullname2" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="adultPrice">Adult Price</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-category"></i></span>
                            <input type="text" id="adultPrice" class="form-control dt-resume" name="adultPrice"
                            placeholder="Adult Price" aria-label="adultPrice" aria-describedby="basicFullname2" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="childPrice">Child Price</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-category"></i></span>
                            <input type="text" id="childPrice" class="form-control dt-resume" name="childPrice"
                            placeholder="Child Price" aria-label="childPrice" aria-describedby="basicFullname2" />
                        </div>
                    </div>
                    <input type="hidden" id="isActive" class="form-check dt-resume ms-1" name="is_active" value="1" />
                    <input type="hidden" id="availableDays" class="form-control dt-resume" name="available_days"
                        placeholder="available_days" aria-label="available_days" aria-describedby="basicFullname2" value="Lunes" />
                    <input type="hidden" id="category_id" class="form-control dt-resume" name="category_id"
                        placeholder="category_id" aria-label="category_id" aria-describedby="basicFullname2" value="{{ $category->id }}" />
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
