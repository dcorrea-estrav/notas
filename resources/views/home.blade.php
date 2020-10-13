@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (auth()->user()->rol == 'teacher')
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                <div class="card">
                    <div class="card-header">
                        Materias asignadas
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Maximo de estudiantes</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{ $row->id }}</th>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->max_students }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary">Ver</button>
                                                    <button type="button" class="btn btn-secondary">Editar</button>
                                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Estudiantes
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Documento</th>
                                    <th scope="col">Correo electronico</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->document }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Ver</button>
                                                <button type="button" class="btn btn-secondary">Editar</button>
                                                <button type="button" class="btn btn-secondary">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
