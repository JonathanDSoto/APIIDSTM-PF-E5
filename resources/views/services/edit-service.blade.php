<form action="" method="POST" class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onsubmit="return validateEditForm()">
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
                <div id="editValidationErrors" class="alert alert-danger" style="display: none;"></div>
                <div id="editSuccessMessage" class="alert alert-success" style="display: none;">Service successfully updated!</div>

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

    <script>
    function validateEditForm() {
        document.getElementById('editValidationErrors').style.display = 'none';
        document.getElementById('editValidationErrors').innerHTML = '';
        document.getElementById('editSuccessMessage').style.display = 'none';

        var name = document.getElementById('name').value.trim();
        var resume = document.getElementById('resume').value.trim();
        var adultPrice = document.getElementById('adultPrice').value.trim();
        var childPrice = document.getElementById('childPrice').value.trim();

        var errors = [];

        if (name === '') {
            errors.push('Name is required.');
        }

        if (resume === '') {
            errors.push('Description is required.');
        }

        if (adultPrice === '') {
            errors.push('Adult Price is required.');
        }

        if (childPrice === '') {
            errors.push('Child Price is required.');
        }

        if (errors.length > 0) {
            displayEditValidationErrors(errors);
            return false;
        } else {
            displayEditSuccessMessage();
            return true;
        }
    }

    function displayEditValidationErrors(errors) {
        var editValidationErrorsDiv = document.getElementById('editValidationErrors');
        var errorsHtml = '';
        errors.forEach(function (error) {
            errorsHtml += '<li>' + error + '</li>';
        });
        errorsHtml += '</ul>';
        editValidationErrorsDiv.innerHTML = errorsHtml;
        editValidationErrorsDiv.style.display = 'block';
    }

    </script>


</form>
