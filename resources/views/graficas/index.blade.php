@extends('layouts.frontend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" id="card-principal">
        <div id="chart1" class="col-md-10 col-md-offset-1"></div>

        {!! $chart1 !!}
    </div>
</div>
@endsection