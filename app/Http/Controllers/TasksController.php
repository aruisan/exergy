<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

class TasksController extends Controller
{
    public function index()
    {
    	$roles = Task::orderBy('id','DESC')->paginate(5);
        return view('task.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
    	return view('task.create');
    }

    public function store(TaskRequest $request)
    {
    	$store =  new Task;
    	$store->titulo = $request->titulo; 	
    	$store->descripcion = $request->descripcion; 	
    	$store->use_id = Auth::user()->id; 	
    	$store->save();
    	return redirect()->route('task.index')
                        ->with('success','Tarea Creada Exitosamente');
    }

    public function show($id)
    {
    	$data = Task::find($id);
    	return view('task.show',compact('data'));
    }

    public function edit($id)
    {
    	 $data = Task::find($id);
    	 if($data->user_id == Auth::user()->id)
    	 {
    	 	return view('task.edit',compact('data'));
    	 }else{
    	 	return back()
    	 			->with('warning','No tiene permisos para editar esta tarea');
    	 }

    }

    public function update(TaskRequest $request, $id)
    {
    	$update = Task::find($id);

    	if($data->user_id == Auth::user()->id)
    	 {
    	 	$update->titulo = $request->titulo;
	    	$update->descripcion = $request->descripcion;
	    	$update->save();

	    	return redirect()->route('task.index')
	                        ->with('success','Tarea Editada Exitosamente');
    	 }else{
    	 	return redirect()->route('task.index')
    	 			->with('warning','No tiene permisos para editar esta tarea');
    	 }
    	
    }


    public function destroy($id)
    {
    	$delete = Task::find($id)->delete();
    	return redirect()->route('task.index')
                        ->with('error','Tarea borrado Satisfactoriamente');
    }

}
