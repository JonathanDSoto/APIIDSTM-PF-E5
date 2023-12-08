@php
    use Carbon\Carbon;
@endphp

@extends('layouts.auth')

@section('title')
    Reservations
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

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

    <x-validation-errors class="my-4" />

    <div class="card">
        @include('layouts.calendar')
    </div>

    <div class="card mt-4">
        <h5 class="card-header">Reservations</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td><span class="fw-medium">{{ $reservation->id }}</span></td>
                            <th>{{ $reservation->client->name }} {{ $reservation->client->lastname }}</th>
                            <th>{{ $reservation->service->name }}</th>
                            <td>{{ Carbon::parse($reservation->startDate)->format('d/m/Y H:i') }}</td>
                            <td>{{ Carbon::parse($reservation->endDate)->format('d/m/Y H:i') }}</td>
                            <td class="actions">
                                <button
                                    type="button"
                                    class="btn btn-danger p-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalDelete"
                                    data-reservation-id="{{ $reservation->id }}"
                                    data-reservation-delete-route="{{ route('reservation.destroy', $reservation->id) }}"
                                    >
                                    <i class="ti ti-trash"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-primary p-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalEdit"
                                    data-reservation-id="{{ $reservation->id }}"
                                    data-reservation-client-id="{{ $reservation->client->id }}"
                                    data-reservation-service-id="{{ $reservation->service->id }}"
                                    data-reservation-adults="{{ $reservation->adultTotal }}"
                                    data-reservation-children="{{ $reservation->childTotal }}"
                                    data-reservation-total="{{ $reservation->total }}"
                                    data-reservation-start-date="{{ $reservation->startDate }}"
                                    data-reservation-end-date="{{ $reservation->endDate }}"
                                    data-reservation-edit-route="{{ route('reservation.update', $reservation->id) }}"
                                    >
                                    <i class="ti ti-pencil"></i>
                                </button>
                                <button>
                                    <a href="{{ route('reservation.pdf', $reservation->id) }}" class="btn btn-success p-2">
                                        <i class="ti ti-printer"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

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
@endsection

@section('scripts')
<script src="{{ asset('assets/js/add-button.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script>
    $(document).ready(function () {
        $('[data-bs-toggle="popover"]').popover();

        function renderIcons(option) {
            if (!option.id) {
                return option.text;
            }
            var $icon = "<i class='bx bxl-" + $(option.element).data("icon") + " me-2'></i>" + option.text;
            return $icon;
        }

        var select2Clients = $("#selectClient");
        var select2Services = $("#selectService");
        var selectServiceEdit = $('#selectServiceEdit');
        var selectClientEdit = $('#selectClientEdit');

        function initializeSelect2(selectElement) {
            selectElement.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: selectElement.parent(),
                templateResult: renderIcons,
                templateSelection: renderIcons,
                escapeMarkup: function (es) {
                    return es;
                }
            });
        }

        initializeSelect2(select2Clients);
        initializeSelect2(select2Services);
        initializeSelect2(selectServiceEdit);
        initializeSelect2(selectClientEdit);

        select2Services.on('change', function (e) {
            updateTotalCost();
        });

        selectServiceEdit.on('change', function (e) {
            updateTotalCostEdit();
        });

        $('#adultTotal, #childTotal').on('input', function () {
            updateTotalCost();
        });

        $('#adultTotalEdit, #childTotalEdit').on('input', function () {
            updateTotalCostEdit();
        });

        function updateTotalCost() {
            var adultPrice = parseFloat($('#selectService option:selected').data('adult-price'));
            var childrenPrice = parseFloat($('#selectService option:selected').data('children-price'));
            var adultTotal = parseInt($('#adultTotal').val()) || 0;
            var childTotal = parseInt($('#childTotal').val()) || 0;
            var totalCost = adultTotal * adultPrice + childTotal * childrenPrice;
            $('#total').val(totalCost.toFixed(2));
        }

        function updateTotalCostEdit() {
            var adultPrice = parseFloat($('#selectServiceEdit option:selected').data('adult-price'));
            var childrenPrice = parseFloat($('#selectServiceEdit option:selected').data('children-price'));
            var adultTotal = parseInt($('#adultTotalEdit').val()) || 0;
            var childTotal = parseInt($('#childTotalEdit').val()) || 0;
            var totalCost = adultTotal * adultPrice + childTotal * childrenPrice;
            $('#totalEdit').val(totalCost.toFixed(2));
        }
    });
</script>
<script>
    $("#modalDelete").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var reservationDeleteRoute = button.data("reservation-delete-route");
        $("#modalDelete").attr("action", reservationDeleteRoute);
    });
</script>
<script>
    $("#modalEdit").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var reservationEditRoute = button.data("reservation-edit-route");
        var reservationClientId = button.data("reservation-client-id");
        var reservationServiceId = button.data("reservation-service-id");
        var reservationAdults = button.data("reservation-adults");
        var reservationChildren = button.data("reservation-children");
        var reservationTotal = button.data("reservation-total");
        var reservationStartDate = button.data("reservation-start-date");
        var reservationEndDate = button.data("reservation-end-date");

        $("#adultTotalEdit").val(reservationAdults);
        $("#childTotalEdit").val(reservationChildren);
        $("#totalEdit").val(reservationTotal);

        $("#startDateEdit").val(reservationStartDate.split(' ')[0]);
        $("#endDateEdit").val(reservationEndDate.split(' ')[0]);
        $("#hourStartEdit").val(reservationStartDate.split(" ")[1].split(":").slice(0, 2).join(":"));
        $("#hourEndEdit").val(reservationEndDate.split(" ")[1].split(":").slice(0, 2).join(":"));

        $("#selectClientEdit").val(reservationClientId).trigger("change");
        $("#selectServiceEdit").val(reservationServiceId).trigger("change");

        $("#modalEdit").attr("action", reservationEditRoute);
    });
</script>
@endsection
