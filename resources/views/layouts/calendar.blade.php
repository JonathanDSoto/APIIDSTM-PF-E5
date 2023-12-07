<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<div class="content-wrapper">
    <!-- Calendar -->
    <div id="calendar" class="card-body"></div>

    <!-- / Calendar -->
</div>
<script src="{{ asset('assets/js/calendar.js') }}"></script>
<script>
    @foreach ($reservations as $reservation)
        calendar.addEvent({
            title: "Reserva de {{ $reservation->client->name }}",
            start: "{{ $reservation->startDate }}",
            end: "{{ $reservation->endDate }}",
            allDay: false,
        });
    @endforeach
</script>
