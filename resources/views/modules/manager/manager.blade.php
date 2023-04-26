@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                @include('modules/manager/secciones/cards')
            </div>
            <div class="col-md-12 mt-5">
                @include('modules/manager/secciones/table')
            </div>
        </div>
    </div>
@endsection