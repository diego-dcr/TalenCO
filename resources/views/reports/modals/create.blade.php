<!-- Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ route('report.store') }}">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="reportModalLabel">Agregar reporte</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Selecciona el aparato: </label>
                    <select class="form-select" id="deivce-id" name="device_id" required>
                        @foreach ($devices as $device)
                            <option value="{{ $device->id }}"> {{ $device->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción: </label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" maxlength="250"
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
