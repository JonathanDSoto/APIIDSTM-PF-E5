@extends('layouts.auth')
@section('title')
    Clients
@endsection
@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.menu')
            <div class="layout-page">
                @include('layouts.navbar')

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h1>Clients</h1>

                    <div class="card container table-data my-5 p-3">
                        <div class="container container-p-y d-flex justify-content-between gap-2">
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
                            <button class="dt-button create-new btn btn-primary" data-bs-target="#addNewUser"
                                data-bs-toggle="modal" tabindex="0" type="button">
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
                                                <a href="{{ route('client.show', $client->id) }}">{{ $client->name }}</a>
                                            </td>
                                            <td>{{ $client->lastname }}</td>
                                            <td>{{ $client->email }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td class="actions">
                                                <button type="button" class="btn btn-danger p-2" data-bs-toggle="modal"
                                                    data-bs-target="#modalDelete" data-client-id="{{ $client->id }}"
                                                    data-client-name="{{ $client->name }}"
                                                    data-client-lastname="{{ $client->lastname }}"
                                                    data-client-email="{{ $client->email }}"
                                                    data-client-phone-number={{ $client->phone }}
                                                    data-client-delete-route={{ route('client.destroy', $client->id) }}
                                                    >
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal"
                                                    data-bs-target="#modalEdit" data-client-id="{{ $client->id }}"
                                                    data-client-name="{{ $client->name }}"
                                                    data-client-lastname="{{ $client->lastname }}"
                                                    data-client-email="{{ $client->email }}"
                                                    data-client-phone-number={{ $client->phone }}>
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

        {{-- Modal  delete --}}
        @include('client.delete-user')
        {{-- Modal  delete --}}

        {{-- Modal  edit --}}
        @include('client.edit-user')
        {{-- Modal  edit --}}

        {{-- Modal create --}}
        @include('client.add-user')
        {{-- Modal create --}}
    </div>
@endsection
@section('scripts')
    {{-- Script to delete an user --}}
    <script>
        $('#modalDelete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var clientId = button.data('client-id'); // Extract info from data-* attributes
            var clientName = button.data('client-name');
            var clientLastname = button.data('client-lastname');
            var clientEmail = button.data('client-email');
            var clientPhoneNumber = button.data('client-phone-number');
            var clientDeleteRoute = button.data('client-delete-route');

            // Update the modal's content with the extracted info
            $('#modal-client-id').text(clientId);
            $('#modal-client-name').text(clientName);
            $('#modal-client-lastname').text(clientLastname);
            $('#modal-client-email').text(clientEmail);
            $('#modal-client-phone-number').text(clientPhoneNumber);
            $('#modalDelete form').attr('action', clientDeleteRoute);
        });
    </script>

    {{-- Script to edit an user --}}
    <script>
        $('#modalEdit').on('show.bs.modal', function(event) {
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
