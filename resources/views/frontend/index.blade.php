@extends('layouts.frontend')
@section('descripcion')
    <meta name="description" content="Edificapp es una plataforma Web desarrollada para facilitar la conexión entre clientes y contratistas especializados en temas relacionados con construcción">
    
    <meta name="keywords" content="Maestros, Construcción, Arquitectos, Electricista, Plomero, Avaluos, Residencial, Comercial, Diseño, Vias, Iluminacion, Sonido, Estructural, Sanitario, Pavimentos, Licencias, Construccion, Urbanizacion, Predios, Decoracion">
@stop
@section('title')
  <title>Edificapp</title>
@stop
@section('h1')
    <h1 hidden>Edificapp</h1>
@stop
@section('content')
    <div data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="container-fluid">
                    <div class="carousel slide" data-ride="carousel" id="features">
                        <ol class="carousel-indicators">
                            
                        </ol>
                        <div class="carousel-inner fullheight">
                            <!--
                            <div class="item active">
                                <img src="{{ asset('img/carrousel1.jpg') }}" alt="img carousel 1">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/ingreso.jpg') }}" alt="img carousel 2">
                                <div class="carousel-caption col-xs-6 col-xs-offset-4 col-sm-3 col-sm-offset-5 col-md-3 col-md-offset-5">
                                    <p>¿QUIERES OFRECER TUS SERVICIOS?</p>
                                    <a href="#" id="especialista" class="llamar_registro" data-toggle="modal" data-target="#registro">INGRESA AQUI</a>
                                </div>
                            </div>-->
                            <div class="item active">
                                <img src="{{ asset('img/principal.png') }}" alt="img carousel 1">
                            </div>
                        @foreach($carrouselImagenes  as $carrusel)
                            <div class="item">
                                <a href="{{$carrusel->url }}" target="_blank">
                                    <img src="{{ asset('uploads/carrousel/'.$carrusel->ruta) }}" alt="">
                                </a>
                            </div>
                        @endforeach


                        </div><!--carrousel-inner-->    

                        <a class="left carousel-control" href="#features" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#features" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right">    </span>
                        </a>
                    </div> <!--carrousel-->
                </div><!--container carousel-->
            </header>
            
            <div class="container-fluid " id="enlace">
                        
                    @foreach ($frases as $frase)
                        @if($frase->is_actived == 1)
                        <div class="col-sm-8 col-md-8">
                            <div class="col-md-4">
                                    <!--section video-->
                                    <ul id="various1" style="list-style: none;" class="hidden-sm hidden-xs">
                                        <li data-sub-html="Bienvenido a Edificapp" data-html="#video1">
                                            <div id="poster">
                                                <img class="img-responsive" src="img/index/poster.jpg" style="width: 250px;">
                                            </div>
                                        </li>
                                    </ul>

                                    <div style="display: none;" id="video1">
                                        <video class="lg-video-object lg-html5" controls preload="none">
                                            <source src="img/index/Video_Edificapp.mp4" type="video/mp4">
                                        </video>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <p  style="font-family: 'Open sans', sans-serif; font-size: 25px"><b>{{$frase->message}}</b></p>
                            </div>
                        </div>
                        @elseif($frase->is_actived == 0)                                
                        <div class="col-sm-4 col-md-4 ">
                            <a href="cotizaciones" class="btn btn-lg col-md-12 boton-cotizaciones" role="button">{{$frase->message}}</a>
                        </div>
                        @endif
                    @endforeach     
            </div> <!--container enlace-->
            <hr>

            <div class="container-fluid directorio" id="directorio">
                <h2>Tipo de Especialistas</h2>
                <div class="row">
                  @foreach($especialidades as $especialidad)
                      <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="panel">
                          <div class="panel-body">
                            <ul class="ladoB" id="tarjeta{{$especialidad->id}}">
                        @foreach($actividades as $actividad)
                          @if ($especialidad->id == $actividad->especializacion_id )
                                    <form id="especialidad{{$actividad->id}}" action="/especialistas" method="POST">
                                         {{ csrf_field() }}
                                          <input type="hidden" name="actividad" value="{{$actividad->id}}">
                                    </form>
                                    <li>
                                      <a href="" class="enviarActividad" id="{{$actividad->id}}">
                                        {{$actividad->nombre}}
                                      </a>
                                    </li>
                          @endif
                        @endforeach
                            </ul>
                            <img  src="{{ asset('uploads/especialidad/'.$especialidad->ruta)}}">
                          </div>
                          <div class="panel-footer">
                            <h4>
                              <label id="{{$especialidad->id}}" class="mostrarTarjeta btn btn-lg btn-block">{!!$especialidad->nombre!!}</label>
                            </h4>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
            <center>
              <a href="{{ asset('especialidades/publica') }}" class="btn btn-primary">
                 Ver Todas Las Especialidades
              </a>
            </center>
            <hr>


            <!--section publicidad-->
    </div>

            <section class="container">
                <div class="aliados owl-carousel owl-theme">
                @if(!$publicidades->isEmpty())
                    @foreach($publicidades  as $publicidad)
                        <a href="{{ $publicidad->link }}"  onclick="publicidadCount('{{ $publicidad->id}}')"
                           target="_blank">
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('uploads/publicidades/'.$publicidad->image) }}">
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="item">
                        <img  class="img-responsive" src="{{ asset('uploads/docs/aliados-default.png') }}">
                    </div>
                @endif
                </div>
            </section>

            <hr>

            <!--section aliados-->
 
                <section class="container">
                <div class="aliados owl-carousel owl-theme">
                 @if(!$convenios->isEmpty())
                    @foreach($convenios  as $convenio)
                            <a href="{{ asset($convenio->url) }}" target="_blank">
                        <div class="item">
                                <img src="{{ asset('uploads/aliados/'.$convenio->image) }}">
                        </div>
                            </a>
                    @endforeach
                @else
                    <div class="item">
                        <img src="{{ asset('uploads/docs/aliados-default.png') }}">
                    </div>
                @endif 
                </div>
            </section> 
            <center>
                <a href="{{ asset('/aliados') }}" class="btn btn-primary">
                  Ver Todos los Aliados
                </a>
            </center>
            <hr>
@stop


