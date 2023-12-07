<form action="{{ route('client.update', ['client' => $client->id]) }}" method="POST" class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onsubmit="return validateEditForm()">
    @csrf
    @method('PUT')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Edit User
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="editValidationErrors" class="alert alert-danger" style="display: none;"></div>
                <div id="editSuccessMessage" class="alert alert-success" style="display: none;">Client successfully updated!</div>

                <div>
                    <div class="mb-3">
                        <label for="name-edit" class="col-form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name-edit" placeholder="Juan">
                    </div>
                    <div class="mb-3">
                        <label for="last-name-edit" class="col-form-label">Lastname:</label>
                        <input type="text" name="lastname" class="form-control" id="last-name-edit" placeholder="Hernandez">
                    </div>
                    <div class="mb-3">
                        <label for="email-edit" class="col-form-label">Email:</label>
                        <input type="text" name="email" class="form-control" id="email-edit" placeholder="juan@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="phone-number-edit" class="col-form-label">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" id="phone-number-edit" placeholder="0000000000">
                    </div>
                </div>
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

            var name = document.getElementById('name-edit').value.trim();
            var lastname = document.getElementById('last-name-edit').value.trim();
            var email = document.getElementById('email-edit').value.trim();
            var phone = document.getElementById('phone-number-edit').value.trim();

            var errors = [];

            if (name === '') {
                errors.push('Name is required.');
            }

            if (lastname === '') {
                errors.push('Last name is required.');
            }

            if (email === '') {
                errors.push('Email is required.');
            } else if (!isValidEmail(email)) {
                errors.push('Invalid email address.');
            }

            if (phone === '') {
                errors.push('Phone number is required.');
            } else if (!isValidPhone(phone)) {
                errors.push('Phone number must contain only digits.');
            } else if (phone.length !== 10) {
                errors.push('Phone number must be 10 digits.');
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

        function displayEditSuccessMessage() {
            var editSuccessMessageDiv = document.getElementById('editSuccessMessage');
            editSuccessMessageDiv.style.display = 'block';
        }

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPhone(phone) {
            var phoneRegex = /^\d+$/;
            return phoneRegex.test(phone);
        }
    </script>
</form>
