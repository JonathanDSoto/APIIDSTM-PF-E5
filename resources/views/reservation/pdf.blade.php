<body>
    <div class="format">
        <div>
            <div class="header">
                <h1>Machape</h1>
            </div>
            <h2>Reservation</h2>
            <p>Reservation ID: {{ $reservation->id }}</p>
            <p>Service: {{ $service->name }}</p>
            <div class="table">
                <div>
                    <h3><strong>Customer Details</strong></h3>
                    <p><strong>Client ID:</strong> {{ $client->id }}</p>
                    <p><strong>Name:</strong> {{ $client->name }} {{ $client->lastname }}</p>
                    <p><strong>Email:</strong> {{ $client->email }}</p>
                    <p><strong>Phone:</strong> {{ $client->phone }}</p>
                    @if ($client->phone2)
                        <p><strong>Emergency Phone:</strong> {{ $client->phone2 }}</p>
                    @endif
                </div>
                <div>
                    <h3><strong>Reservation Details</strong></h3>
                    <p><strong>Reservation Date:</strong> {{ $reservation->startDate }}</p>
                    <p><strong>Return Date:</strong> {{ $reservation->endDate }}</p>
                    <p><strong>Reservation # Adult:</strong> {{ $reservation->adultTotal }}</p>
                    <p><strong>Reservation # Children:</strong> {{ $reservation->childTotal }}</p>
                </div>
            </div>
            <div>
                <h3><strong>Reservation Total</strong></h3>
                <p><strong>Total:</strong> {{ $reservation->total }}</p>
            </div>
        </div>
        <br>
        <div>
            <h4 class="header">Machape</h4>
        </div>
    </div>
</body>

<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }

    .header {
        background-color: #000;
        color: #fff;
        padding: 10px;
    }

    .header h2 {
        padding-right: 50px;
    }

    .table {
        display: flex;
        padding-left: 0%;
        justify-content: space-evenly;
    }
    .format{
        justify-content: space-between;
    }

</style>
