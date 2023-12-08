<div class="modal fade" id="addNewCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Category</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="categoryValidationErrors" class="alert alert-danger" style="display: none;"></div>
                <div id="categorySuccessMessage" class="alert alert-success" style="display: none;">Category successfully added!</div>

                <form action="{{ route('category.store') }}" method="POST" class="addNewCategory pt-0 row g-2"
                    id="form-addNewCategory" onsubmit="return validateCategoryForm()">
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

    <script>
        function validateCategoryForm() {
            document.getElementById('categoryValidationErrors').style.display = 'none';
            document.getElementById('categoryValidationErrors').innerHTML = '';

            var categoryName = document.getElementById('name').value.trim();

            var errors = [];

            if (categoryName === '') {
                errors.push('Category name is required.');
            }

            if (errors.length > 0) {
                displayCategoryValidationErrors(errors);
                return false;
            } else {
                displayCategorySuccessMessage();
                return true;
            }
        }

        function displayCategoryValidationErrors(errors) {
            var categoryValidationErrorsDiv = document.getElementById('categoryValidationErrors');
            var errorsHtml = '';
            errors.forEach(function (error) {
                errorsHtml += '<li>' + error + '</li>';
            });
            errorsHtml += '</ul>';
            categoryValidationErrorsDiv.innerHTML = errorsHtml;
            categoryValidationErrorsDiv.style.display = 'block';
        }

        function displayCategorySuccessMessage() {
            var categorySuccessMessageDiv = document.getElementById('categorySuccessMessage');
            categorySuccessMessageDiv.style.display = 'block';
        }
    </script>
</div>
