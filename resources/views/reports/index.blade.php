<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportModal">
    Nuevo reporte
</button>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Producto</th>
            <th scope="col">Status</th>
            <th scope="col">Funciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report)
            <tr>
                <th scope="row">{{ $report->id }}</th>
                <td>{{ $report->created_at }}</td>
                <td> {{ $report->device->name }} </td>
                <td> {{ $report->device->status->name }} </td>
                <td>
                    <button class="btn btn-warning btn-sm"  data-bs-toggle="modal"
                        data-bs-target="#statusModal">Cambiar status</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>