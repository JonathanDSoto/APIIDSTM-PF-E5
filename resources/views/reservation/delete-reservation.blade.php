<form
    class="modal fade"
    id="modalDelete"
    tabindex="-1"
    aria-labelledby="confirmModalLabel"
    aria-hidden="true"
    action=""
    method="POST"
>
    @csrf
    @method('DELETE')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">
                    Confirm action
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar"
                ></button>
            </div>
            <div class="modal-body">
                Are you sure you delete this reservation?
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Cancel
                </button>
                <button type="submit" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</form>
