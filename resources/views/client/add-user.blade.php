<div class="modal fade" id="addNewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Client</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="validationErrors" class="alert alert-danger" style="display: none;"></div>
                <div id="successMessage" class="alert alert-success" style="display: none;">Client successfully added!</div>

                <form action="{{ route('client.store') }}" method="POST" class="addNewUser pt-0 row g-2" id="form-addNewUser">
                    @csrf
                    @method('POST')
                    <div class="col-sm-12">
                        <label class="form-label" for="name">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                            <input type="text" id="name" class="form-control dt-name" name="name"
                                placeholder="Filomeno" aria-label="Filomeno" aria-describedby="basicFullname2" value="{{ old('name') }}"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="lastname">
                            Last name
                        </label>
                        <div class="input-group input-group-merge">
                            <span id="basicPost2" class="input-group-text">
                                <i class="ti ti-user"></i>
                            </span>
                            <input type="text" id="lastname" name="lastname" class="form-control dt-lastname"
                                placeholder="Pancrasio" aria-label="Pancrasio" aria-describedby="basicPost2" value="{{ old('lastname') }}"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="email">
                            Email
                        </label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                            <input type="text" id="email" name="email" class="form-control dt-email"
                                placeholder="example@example.com" aria-label="example@example.com" value="{{ old('email') }}"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="phone">
                            Phone number
                        </label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                            <input type="text" id="phone" name="phone"
                                class="form-control dt-phone" placeholder="0123456789" aria-label="0123456789" value="{{ old('phone') }}"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" onclick="validateForm()" class="btn btn-primary data-submit me-sm-3 me-1">
                            Save
                        </button>
                        <button type="reset" class="btn btn-outline-secondary text-reset" data-bs-dismiss="modal" aria-label="Cancel" onclick="clearErrors()">
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
    function validateForm() {
        document.getElementById('validationErrors').style.display = 'none';
        document.getElementById('validationErrors').innerHTML = '';
        document.getElementById('successMessage').style.display = 'none';

        var name = document.getElementById('name').value.trim();
        var lastname = document.getElementById('lastname').value.trim();
        var email = document.getElementById('email').value.trim();
        var phone = document.getElementById('phone').value.trim();

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
            displayValidationErrors(errors);
        }else {
            displaySuccessMessage();
            document.getElementById('form-addNewUser').submit();
        }
    }

    function displayValidationErrors(errors) {
        var validationErrorsDiv = document.getElementById('validationErrors');
        var errorsHtml = '';
        errors.forEach(function (error) {
            errorsHtml += '<li>' + error + '</li>';
        });
        errorsHtml += '</ul>';
        validationErrorsDiv.innerHTML = errorsHtml;
        validationErrorsDiv.style.display = 'block';
    }

    function displaySuccessMessage() {
        var successMessageDiv = document.getElementById('successMessage');
        successMessageDiv.style.display = 'block';
    }

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidPhone(phone) {
        var phoneRegex = /^\d+$/;
        return phoneRegex.test(phone);
    }

    function clearErrors() {
    document.getElementById('validationErrors').style.display = 'none';
    document.getElementById('validationErrors').innerHTML = '';
    document.getElementById('successMessage').style.display = 'none';
    }
    </script>
</div>
