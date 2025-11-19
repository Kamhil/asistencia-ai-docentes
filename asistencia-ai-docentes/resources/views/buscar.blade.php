@extends('layouts.app')


@section('title', 'Buscar Docente')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">ASISTENCIA DEL CURSO DE IA APLICADA A LA INVESTIGACIÓN</h2>

    @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <form action="{{ route('buscar.docente') }}" method="GET" class="row justify-content-center">
        <div class="col-md-6">
            <input type="text" name="dni" class="form-control form-control-lg mb-3" placeholder="Ingrese su DNI" required>
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </form>
</div>
@endsection
