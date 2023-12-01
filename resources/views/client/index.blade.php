@extends('layouts.auth')

@section('title')
    Categories
@endsection

@section('content')
    <h1>Clients</h1>
    <div class="card container table-data my-5 p-3">
        <div
            class="container container-p-y d-flex justify-content-between gap-2"
        >
            <div class="d-flex align-items-center gap-2">
                <input
                    type="text"
                    id="search-client"
                    class="form-control"
                    placeholder="Search"
                />
            </div>
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
        <x-validation-errors class="my-4" />
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
                <tbody id="data-table">
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>
                            <a
                                href="{{ route('client.show', $client->id) }}"
                                >{{ $client->name }}</a
                            >
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
                                data-client-phone-number="{{ $client->phone }}"
                                data-client-delete-route={{ route('client.destroy', $client->id) }}
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
                                data-client-phone-number="{{$client->phone }}"
                                data-client-edit-route={{ route('client.update', $client->id) }}
                                >
                                <i class="ti ti-pencil"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('client.pagination')
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
@endsection

@section('scripts')

{{-- Script to responsive table --}}
<script src="{{asset('assets/js/table-clients.js')}}"></script>

{{-- Script to delete an user --}}
<script>
    $("#modalDelete").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var clientId = button.data("client-id"); // Extract info from data-* attributes
        var clientName = button.data("client-name");
        var clientLastname = button.data("client-lastname");
        var clientEmail = button.data("client-email");
        var clientPhoneNumber = button.data("client-phone-number");
        var clientDeleteRoute = button.data("client-delete-route");

        // Update the modal's content with the extracted info
        $("#modal-client-id").text(clientId);
        $("#modal-client-name").text(clientName);
        $("#modal-client-lastname").text(clientLastname);
        $("#modal-client-email").text(clientEmail);
        $("#modal-client-phone-number").text(clientPhoneNumber);
        $("#modalDelete").attr("action", clientDeleteRoute);
    });
</script>

{{-- Script to edit an user --}}
<script>
    $("#modalEdit").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var clientId = button.data("client-id"); // Extract info from data-* attributes
        var clientName = button.data("client-name");
        var clientLastname = button.data("client-lastname");
        var clientEmail = button.data("client-email");
        var clientPhoneNumber = button.data("client-phone-number");
        var clientEditRoute = button.data("client-edit-route");

        // Set the initial values of the form fields
        $("#name-edit").val(clientName);
        $("#last-name-edit").val(clientLastname);
        $("#email-edit").val(clientEmail);
        $("#phone-number-edit").val(clientPhoneNumber);
        $("#modalEdit").attr("action", clientEditRoute);
    });
</script>
@endsection
