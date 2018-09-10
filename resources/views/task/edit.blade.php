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
        <div class="col-md-8" id="card-principal">
            <div class="card" >
                <div class="card-header">
                    <center>
                        <h3>edición de Tarea</h3>
                    </center>
                </div>
                <div class="card-body">
                    {!! Form::model($data, ['method' => 'PATCH','route' => ['task.update', $data->id]]) !!}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="text" name="titulo" placeholder="Titulo" value="{{old('titulo')}}" required>
                            </div>
                            <small>Digite una Tarea</small><br>
                            @if ($errors->has('titulo'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
                                </div>
                                <textarea class="form-control" name="descripcion" placeholder="Descripcion de la tarea a realizar">{{old('descripcion')}}</textarea>
                            </div>
                            @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Nueva Tarea">
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection