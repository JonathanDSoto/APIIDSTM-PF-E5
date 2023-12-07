// Inicializa el calendario
var calendarEl = document.getElementById("calendar");
var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    selectable: false,
    timeZone: "local",
    displayEventTime: false,
    eventClick: function (info) {
        // Previene el comportamiento predeterminado del evento
        info.jsEvent.preventDefault();

        // Muestra el modal
        $("#edit-reservation").modal("show");
    },
});

// Renderiza el calendario
calendar.render();
