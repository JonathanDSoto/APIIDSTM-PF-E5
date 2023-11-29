<div
    class="modal fade"
    id="modalEdit"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Edit User
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name-edit" class="col-form-label">
                            Name:
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="name-edit"
                            placeholder="Juan"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="last-name-edit" class="col-form-label">
                            Message:
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="last-name-edit"
                            placeholder="Hernadez"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="email-edit" class="col-form-label">
                            Email:
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="email-edit"
                            placeholder="juan@example.com"
                        />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Send message
                </button>
            </div>
        </div>
    </div>
</div>
