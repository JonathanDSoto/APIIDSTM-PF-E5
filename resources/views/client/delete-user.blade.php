<form action="{{ route('client.destroy', $client->id) }}" method="POST" class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @csrf
    @method('DELETE')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Are you sure to delete this user?
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body col">
                <span class="row"> ID: <strong id="modal-client-id"></strong> </span>
                <span class="row"> Name: <strong id="modal-client-name"></strong> </span>
                <span class="row"> Last name: <strong id="modal-client-lastname"></strong> </span>
                <span class="row"> Email: <strong id="modal-client-email"></strong> </span>
                <span class="row"> Phone Number: <strong id="modal-client-phone-number"></strong> </span>
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
