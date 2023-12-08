@php
    use Carbon\Carbon;
@endphp

<h1>Service/Details</h1>
<div class="p-1" style="max-width: 540px">
    <div class="row">
        <div class="col-md-4">
            <img
                src="{{ asset('assets/img/machape/Logo.png') }}"
                class="img-fluid rounded-start"
            />
        </div>
        <div class="col-md-8">
            <div class="d-flex card-body h-100 justify-content-center flex-column">
                <h5 class="card-title">{{ $service->name }}</h5>
                <p class="card-text">
                    {{ $service->resume }}
                </p>
                <p class="card-text">
                    <strong>Price for adults</strong>
                    <small class="text-muted">Cost: ${{ $service->adultPrice }}</small>
                </p>
                <p class="card-text">
                    <strong>Price for chilren</strong>
                    <small class="text-muted">Cost: ${{ $service->childPrice }}</small>
                </p>
            </div>
        </div>
    </div>
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
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($service->reservations as $reservation)
                    <tr>
                        <td><span class="fw-medium">{{ $reservation->id }}</span></td>
                        <th>{{ $reservation->client->name }} {{ $reservation->client->lastname }}</th>
                        <th>{{ $reservation->service->name }}</th>
                        <td>{{ Carbon::parse($reservation->startDate)->format('d/m/Y H:i') }}</td>
                        <td>{{ Carbon::parse($reservation->endDate)->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
