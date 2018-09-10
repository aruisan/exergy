<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use DB;

class GraficosController extends Controller
{

	public function index()
	{


		$chart1 = $this->grafico1();
		return view('graficas.index', ['chart1' => $chart1]);
	}

    public function grafico1()
    {
    	


	    $chart1 = \Chart::title([
	        'text' => 'linea de tiempo Registro de usuarios',
	    ])
	    ->chart([
	        'type'     => 'line', // pie , columnt ect
	        'renderTo' => 'chart1', // render the chart into your div with id
	    ])
	    ->subtitle([
	        'text' => 'Usuarios 2018',
	    ])
	    ->colors([
	        '#0c2959'
	    ])
	    ->xaxis([
	        'categories' => [
	            'Alex Turner',
	            'Julian Casablancas',
	            'Bambang Pamungkas',
	            'Mbah Surip',
	        ],
	        'labels'     => [
	            'rotation'  => 15,
	            'align'     => 'top',
	            'formatter' => 'startJs:function(){return this.value + " (Footbal Player)"}:endJs', 
	            // use 'startJs:yourjavasscripthere:endJs'
	        ],
	    ])
	    ->yaxis([
	        'text' => 'This Y Axis',
	    ])
	    ->legend([
	        'layout'        => 'vertikal',
	        'align'         => 'right',
	        'verticalAlign' => 'middle',
	    ])
	    ->series(
	        [
	            [
	                'name'  => 'Voting',
	                'data'  => [43934, 52503, 57177, 69658],
	                // 'color' => '#0c2959',
	            ],
	        ]
	    )
	    ->display();

	  return $chart1;
	}
}
