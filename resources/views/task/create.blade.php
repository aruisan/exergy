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
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8" id="card-principal">
            <div class="card" >
                <div class="card-header">
                    <center>
                        <h3>Creación de Tarea</h3>
                    </center>
                </div>
                <div class="card-body">
                    <form action="{{ route('task.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-thumb-tack"></i></span>
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
                                    <span><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="color" name="color" placeholder="Titulo" value="{{old('color')}}" required>
                            </div>
                            <small>Escoge un color</small><br>
                            @if ($errors->has('color'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-comment-o"></i></span>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection