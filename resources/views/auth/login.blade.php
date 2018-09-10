@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" id="card-principal">
            <div class="card" >
                <div class="card-header">
                    <center>
                        <h3>Iniciar Sesión</h3>
                    </center>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required autofocus>
                            </div>
                            <small>Digite su correo electrónico</small><br>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                            </div>
                            <small>Digite su Contraseña</small><br>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Acceder">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvido su contraseña?
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
