@extends('layouts.auth') @section('title') Clients @endsection
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.menu')
        <div class="layout-page">
            @include('layouts.navbar')

            <div class="container-xxl flex-grow-1 container-p-y">
                <h1>Clients</h1>

                    <div class="card container table-data my-5 p-3">
                        <div
                            class="container container-p-y d-flex justify-content-between gap-2"
                        >
                            {{-- <div>
                                <select
                                    class="form-select"
                                    aria-label="Default select example"
                                >
                                    <option selected value="5">5</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search"
                                />
                            </div> --}}
                            <button
                                class="dt-button create-new btn btn-primary"
                                data-bs-target="#addNewUser"
                                data-bs-toggle="modal"
                                tabindex="0"
                                type="button"
                            >
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                        <div class="card-datatable overflow-auto">
                            <table class="table table-hover">
                                <thead class="table-border-bottom-0">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td>
                                                <a href="{{route('client.show', $client->id)}}">{{ $client->name }}</a>
                                            </td>
                                            <td>{{ $client->lastname }}</td>
                                            <td>{{ $client->email }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td class="actions">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger p-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalDelete"
                                                    data-client-id="{{ $client->id }}"
                                                    data-client-name="{{ $client->name }}"
                                                    data-client-lastname="{{ $client->lastname }}"
                                                    data-client-email="{{ $client->email }}"
                                                    data-client-phone-number={{ $client->phone }}
                                                >
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-primary p-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEdit"
                                                    data-client-id="{{ $client->id }}"
                                                    data-client-name="{{ $client->name }}"
                                                    data-client-lastname="{{ $client->lastname }}"
                                                    data-client-email="{{ $client->email }}"
                                                    data-client-phone-number={{ $client->phone }}
                                                >
                                                    <i class="ti ti-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal  delete -->
        <div
            class="modal fade"
            id="modalDelete"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Are you sure to delete this user?
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body col">
                        <span class="row"> ID: <strong id="modal-client-id"></strong> </span>
                        <span class="row"> Name: <strong id="modal-client-name"></strong> </span>
                        <span class="row"> Last name: <strong id="modal-client-lastname"></strong> </span>
                        <span class="row"> Email: <strong id="modal-client-email"></strong> </span>
                        <span class="row"> Phone Number: <strong id="modal-client-phone-number"></strong> </span>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal delete -->

        <!-- Modal  edit -->
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
                                <label for="name-edit" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="name-edit" placeholder="Juan">
                            </div>
                            <div class="mb-3">
                                <label for="last-name-edit" class="col-form-label">Lastname:</label>
                                <input type="text" class="form-control" id="last-name-edit" placeholder="Hernandez">
                            </div>
                            <div class="mb-3">
                                <label for="email-edit" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="email-edit" placeholder="juan@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="phpne-number-edit" class="col-form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="phone-number-edit" placeholder="0000000000">
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
        <!-- /Modal edit -->

        <!-- Create new user -->
        <div
            class="modal fade"
            id="addNewUser"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5">Add Client</h2>
                        <button
                            type="button"
                            class="btn-close text-reset"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">

                        <form
                            class="addNewUser pt-0 row g-2"
                            id="form-addNewUser"
                        >
                            <div class="col-sm-12">
                                <label class="form-label" for="name">Name</label>
                                <div class="input-group input-group-merge">
                                    <span
                                        id="basicFullname2"
                                        class="input-group-text"
                                        ><i class="ti ti-user"></i
                                    ></span>
                                    <input
                                        type="text"
                                        id="name"
                                        class="form-control dt-name"
                                        name="name"
                                        placeholder="Filomeno"
                                        aria-label="Filomeno"
                                        aria-describedby="basicFullname2"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="last-name">
                                    Last name
                                </label>
                                <div class="input-group input-group-merge">
                                    <span id="basicPost2" class="input-group-text">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <input
                                        type="text"
                                        id="last-name"
                                        name="last-name"
                                        class="form-control dt-last-name"
                                        placeholder="Pancrasio"
                                        aria-label="Pancrasio"
                                        aria-describedby="basicPost2"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="email">
                                    Email
                                </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"
                                        ><i class="ti ti-mail"></i
                                    ></span>
                                    <input
                                        type="text"
                                        id="email"
                                        name="email"
                                        class="form-control dt-email"
                                        placeholder="elbergalarga@example.com"
                                        aria-label="elbergalarga@example.com"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="phone-number">
                                    Phone number
                                </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"
                                        ><i class="ti ti-phone"></i
                                    ></span>
                                    <input
                                        type="text"
                                        id="phone-number"
                                        name="phone-number"
                                        class="form-control dt-phone-number"
                                        placeholder="0123456789"
                                        aria-label="0123456789"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button
                                    type="submit"
                                    class="btn btn-primary data-submit me-sm-3 me-1"
                                >
                                    Save
                                </button>
                                <button
                                    type="reset"
                                    class="btn btn-outline-secondary text-reset"
                                    data-bs-dismiss="modal"
                                    aria-label="Cancel"
                                >
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="offcanvas-body flex-grow-1">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
{{-- Script to delete an user --}}
<script>
    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var clientId = button.data('client-id'); // Extract info from data-* attributes
        var clientName = button.data('client-name');
        var clientLastname = button.data('client-lastname');
        var clientEmail = button.data('client-email');
        var clientPhoneNumber = button.data('client-phone-number');

        // Update the modal's content with the extracted info
        $('#modal-client-id').text(clientId);
        $('#modal-client-name').text(clientName);
        $('#modal-client-lastname').text(clientLastname);
        $('#modal-client-email').text(clientEmail);
        $('#modal-client-phone-number').text(clientPhoneNumber)
    });
</script>

{{-- Script to edit an user --}}
<script>
    $('#modalEdit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var clientId = button.data('client-id'); // Extract info from data-* attributes
        var clientName = button.data('client-name');
        var clientLastname = button.data('client-lastname');
        var clientEmail = button.data('client-email');
        var clientPhoneNumber = button.data('client-phone-number');

        // Set the initial values of the form fields
        $('#name-edit').val(clientName);
        $('#last-name-edit').val(clientLastname);
        $('#email-edit').val(clientEmail);
        $('#phone-number-edit').val(clientPhoneNumber)
    });
</script>
@endsection
