// Inicializa el calendario
var calendarEl = document.getElementById("calendar");
var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    selectable: false,
    timeZone: "local",
    eventClick: function (info) {
        // Previene el comportamiento predeterminado del evento
        info.jsEvent.preventDefault();

        // Muestra el modal
        $("#edit-reservation").modal("show");
    },
});

calendar.addEvent({
    title: "Evento tittle",
    start: "2023-12-03T00:00:00",
    end: "2023-12-05T00:00:00",
    allDay: false,
});

// Renderiza el calendario
calendar.render();
