<form action="" method="POST" class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onsubmit="return validateEditCategoryForm();">
    @csrf
    @method('PUT')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Category</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-input-field
                    label="Name"
                    id="name"
                    name="name"
                    placeholder="Name of category"
                />
                <div id="error-name" class="text-danger" style="display: none;"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
    </div>
</form>

<script>
    function validateEditCategoryForm() {
        resetEditCategoryErrorMessages();

        var categoryName = document.getElementById('name').value.trim();

        if (categoryName === '') {

            displayEditCategoryError('error-name', 'Category name is required.');
            return false;
        }

        return true;
    }

    function resetEditCategoryErrorMessages() {
        var errorElement = document.getElementById('error-name');
        errorElement.style.display = 'none';
        errorElement.innerText = '';
    }

    function displayEditCategoryError(elementId, errorMessage) {
        var errorElement = document.getElementById(elementId);
        errorElement.style.display = 'block';
        errorElement.innerText = errorMessage;
    }
</script>
