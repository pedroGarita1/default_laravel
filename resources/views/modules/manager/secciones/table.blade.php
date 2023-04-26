<table class="table table-active table-borderless table-responsive">
    <thead>
        <tr class="text-white">
            <th scope="col">Nombre del registro</th>
            <th scope="col">Gasto o Ganancia</th>
            <th scope="col">Ingreso o retiro</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registro as $item)
        <tr class="text-white-50">
            <th scope="row">{{ $item->name_register }}</th>
            <td>{{ $item->estado_registro }}</td>
            @if ($item->estado_registro != 'Gasto')
            <td>{{ $item->ganancias }}</td>
            @else
            <td>{{ $item->gastos }}</td>
            @endif
            <td><a href="{{ route('manager-edit', ['id'=>$item->id]) }}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="{{ route('manager-delete', ['id'=>$item->id]) }}" class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>