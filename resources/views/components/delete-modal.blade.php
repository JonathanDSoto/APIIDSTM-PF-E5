@props(['message'])

<form action="" method="POST" class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
    @csrf
    @method('DELETE')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $message }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                    Delete
                </button>
            </div>
        </div>
    </div>
</form>
