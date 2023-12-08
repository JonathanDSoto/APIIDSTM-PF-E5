<form action="" method="POST" class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
@csrf
    @method('DELETE')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    ¿Estás seguro de que quieres eliminar a este usuario?
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body col">
                <div id="deleteSuccessMessage" class="alert alert-success mt-3" style="display: none;">Client successfully deleted!</div>

                <span class="row"> ID: <strong id="modal-client-id"></strong> </span>
                <span class="row"> Nombre: <strong id="modal-client-name"></strong> </span>
                <span class="row"> Apellido: <strong id="modal-client-lastname"></strong> </span>
                <span class="row"> Correo electrónico: <strong id="modal-client-email"></strong> </span>
                <span class="row"> Número de teléfono: <strong id="modal-client-phone-number"></strong> </span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>
                <button type="submit" class="btn btn-primary" onclick="showDeleteSuccessMessage()">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    function showDeleteSuccessMessage() {
        // Muestra el mensaje de eliminación exitosa después de hacer clic en el botón Eliminar
        document.getElementById('deleteSuccessMessage').style.display = 'block';
    }
</script>
