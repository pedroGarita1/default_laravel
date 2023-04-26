@extends('layouts/main')
@section('contenido')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="container-auth mt-5" id="container-auth">
                <form action="{{ route('manager-update', ['id'=>$registro->id]) }}" method="POST">
                    @csrf
                    <h1 class="mt-3 mb-5">Editor de registro</h1>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="name_register" id="id_name" value="{{ $registro->name_register }}" placeholder="Correo Electronico">
                        <label for="id_name">Nombre del registro</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select class="form-select" name="estado_registro">
                            @if ($registro->estado_registro == 'Ganancia')
                            <option value="Ganancia" selected>Ganancia</option>
                            <option value="Gasto">Gasto</option>
                            @else
                            <option value="Ganancia">Ganancia</option>
                            <option value="Gasto" selected>Gasto</option>
                            @endif
                        </select>
                        <label for="id_estado">Gasto o Ganancia</label>
                    </div>
                    <div class="form-floating mb-2">
                        @if ($registro->estado_registro == 'Ganancia')
                        <input type="text" class="form-control" name="ingreso" id="id_ingreso" value="{{ $registro->ganancias }}" placeholder="Contraseña">
                        @else
                        <input type="text" class="form-control" name="ingreso" id="id_ingreso" value="{{ $registro->gastos }}" placeholder="Contraseña">
                        @endif
                        <label for="id_ingreso">Ingreso</label>
                    </div>
                    <button class="btn btn-outline-primary">Actualizar</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection