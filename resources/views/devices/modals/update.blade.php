<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ route('device.update') }}">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="statusModalLabel">Cambiar Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="device-id" name="device_id" required>
                <label for="name" class="form-label">Nuevo status: </label>
                <select class="form-select" id="status-id" name="status_id" required>
                    @foreach ($status as $s)
                        <option value="{{ $s->id }}"> {{ $s->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function setDeviceId(id) {
        $('#device-id').val(id);

        console.log($('#device-id').val());
    }
</script>