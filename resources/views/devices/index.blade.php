<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deviceModal">
    Aparato electronico
</button>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Status</th>
            <th scope="col">Funciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($devices as $device)
            <tr>
                <th scope="row">{{ $device->id }}</th>
                <td>{{ $device->name }}</td>
                <td> {{ $device->status->name }} </td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="setDeviceId({{ $device->id }})"
                        data-bs-toggle="modal" data-bs-target="#statusModal">Cambiar status</button>
                    @if ($device->status_id == 3)
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#reportModal">Reporte</button>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
