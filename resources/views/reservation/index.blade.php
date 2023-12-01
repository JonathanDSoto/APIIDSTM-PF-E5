@extends('layouts.auth') @section('title') Clients @endsection
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.menu')
        <div class="layout-page">
            @include('layouts.navbar')

            <div class="container-xxl flex-grow-1 container-p-y">
                <h1>Clients</h1>

                @include('layouts.calendar')
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
@endsection @section('scripts')

{{-- Script to responsive table --}}
<script src="{{ asset('assets/js/table-clients.js') }}"></script>

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
