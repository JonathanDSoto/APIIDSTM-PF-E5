@php
    use Carbon\Carbon;
@endphp

@extends('layouts.auth')

@section('title')
    Clientes
@endsection

@section('content')
    <div class="container row">
        <div class="col-12">
            <div class="card mb-4">
                <div
                    class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4"
                >
                    <div class="mt-n2 mx-sm-0 mx-auto">
                        <img
                            src="{{ asset('assets/img/avatars/14.png') }}"
                            alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"
                        />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4"
                        >
                            <div class="user-profile-info">
                                <h4>{{ $client->name }} {{ $client->lastname }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2"
                                >
                                    <li class="list-inline-item d-flex gap-1">
                                        <i class="ti ti-calendar"></i>
                                        joined in {{ $client->created_at->format('d F') }}
                                    </li>
                                    <li class="list-inline-item d-flex gap-1">
                                        <i class="ti ti-calendar"></i>
                                        Total Reservations: {{ $client->reservations->count() }}
                                    </li>
                                    <li class="list-inline-item d-flex gap-1">
                                        <i class="ti ti-calendar-stats"></i>
                                        Last Reservation: {{ $client->reservations->last()->created_at->format('d F') }}
                                    </li>
                                    <li class="list-inline-item d-flex gap-1">
                                        <i class="ti ti-currency-dollar"></i>
                                        Total Spent: {{ $client->reservations->sum('total') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-datatable table-responsive">
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Total Price</th>
                    </tr>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($client->reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->client->name }} {{ $reservation->client->lastname }}</td>
                        <td>{{ $reservation->service->name }}</td>
                        <td>{{ Carbon::parse($reservation->startDate)->format('d/m/Y H:i') }}</td>
                        <td>{{ Carbon::parse($reservation->endDate)->format('d/m/Y H:i') }}</td>
                        <td>{{ $reservation->adultTotal }}</td>
                        <td>{{ $reservation->childTotal }}</td>
                        <td>{{ $reservation->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
