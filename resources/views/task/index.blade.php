@extends('layouts.frontend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" id="card-principal">
        <div class="col-md-2">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav" id="side-menu">
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
        <div class="col-md-10">
            @foreach ($data->chunk(4) as $chunk)
                <div class="row" id="card-principal">
                    @foreach($chunk as $task)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="card" style="background-color: {{ $task->color }} ; color: white;">
                                <div class="card-header">
                                    <center>
                                        <h3>{!! str_limit($task->titulo, 20) !!}</h3>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <a href="{{ route('task.edit',$task->id) }}" class="btn btn-sm btn-info">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                        </a>
                                        {!!Form::open(['method' => 'DELETE','route' => ['task.destroy', $task->id],'style'=>'display:inline']) !!}
                                            <button type="submit" name="delete_modal" class="btn btn-sm btn-danger delete" >
                                                <span class="glyphicon glyphicon-remove " aria-hidden="true"></span>
                                            </button>
                                        {!! Form::close() !!}

                                    </div>
                                    <ul>
                                        <li>
                                            
                                        </li>
                                        <li>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            {!! $data->render() !!}
        </div>
    </div>
</div>
@endsection