@extends('layouts.auth') @section('title') Reservations @endsection
@section('content')
<div class="container container-p-y">
    <h1>Reservations</h1>
    <button
        class="dt-button create-new btn btn-primary mb-3"
        data-bs-target="#add-new-reservation"
        data-bs-toggle="modal"
        data-type="Service"
        tabindex="0"
        type="button"
    >
        <i class="ti ti-plus"></i>
    </button>
    <div class="card">@include('layouts.calendar')</div>

    {{-- Modal add --}}
    @include('reservation.add-reservation')
    {{-- Modal add --}}

    {{-- Modal edit --}}
    @include('reservation.edit-reservation')
    {{-- Modal edit --}}

    {{-- Modal Confirm delete --}}
    @include('reservation.delete-reservation')

    {{-- Modal Confirm delete --}}
</div>
@endsection @section('scripts')

{{-- Script to responsive table --}}
<script src="{{ asset('assets/js/add-button.js') }}"></script>
<script>
    $(document).ready(function () {
        $('[data-bs-toggle="popover"]').popover();
    });
</script>

@endsection
