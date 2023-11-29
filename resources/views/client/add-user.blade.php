<div class="offcanvas offcanvas-end" id="add-new-user">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="exampleModalLabel">New User</h5>
        <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>
    <div class="offcanvas-body flex-grow-1">
        <form
            class="add-new-user pt-0 row g-2"
            id="form-add-new-user"
            onsubmit="return false"
        >
            <div class="col-sm-12">
                <label class="form-label" for="name">Name</label>
                <div class="input-group input-group-merge">
                    <span id="basicFullname2" class="input-group-text"
                        ><i class="ti ti-user"></i
                    ></span>
                    <input
                        type="text"
                        id="name"
                        class="form-control dt-name"
                        name="name"
                        placeholder="John Doe"
                        aria-label="John Doe"
                        aria-describedby="basicFullname2"
                    />
                </div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="last-name"> Last name </label>
                <div class="input-group input-group-merge">
                    <span id="basicPost2" class="input-group-text">
                        <i class="ti ti-user"></i>
                    </span>
                    <input
                        type="text"
                        id="last-name"
                        name="last-name"
                        class="form-control dt-last-name"
                        placeholder="Hernadez"
                        aria-label="Hernadez"
                        aria-describedby="basicPost2"
                    />
                </div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="email"> Email </label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"
                        ><i class="ti ti-mail"></i
                    ></span>
                    <input
                        type="text"
                        id="email"
                        name="email"
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
                <button
                    type="submit"
                    class="btn btn-primary data-submit me-sm-3 me-1"
                >
                    Add
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
