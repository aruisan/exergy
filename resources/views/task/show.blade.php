@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a href="{{ route('task.index') }}" class="btn btn-primary">
                                <i class="fa fa-thumb-tack"></i>
                                Listar Tareas
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('task.create') }}" class="btn btn-primary">
                                <i class="fa fa-thumb-tack"></i>
                                Nueva Tarea
                            </a>
                        </li>      
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-2" id="card-principal">
            <div class="card" style="background-color: {{ $data->color }}; color:white;">
                <div class="card-header">
                    <center>
                        <h3>{{ $data->titulo }}</h3>
                    </center>
                </div>
                <div class="card-body">
                    <p>
                        {{ $data->descripcion }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection