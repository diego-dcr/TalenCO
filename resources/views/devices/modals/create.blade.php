<!-- Modal -->
<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="deviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ route('device.store') }}">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deviceModalLabel">Agregar aparato</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre: </label>
                    <input type="string" class="form-control" id="name" name="name" maxlength="50" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción: </label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" maxlength="100"
                        required></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>