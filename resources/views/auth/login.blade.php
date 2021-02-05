@extends('layouts.app')

@section('content')
<div class="container pb-0">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6  ">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
            <div class="card card-login">
                <div class="card-header card-header-primary text-center">
                    <h4 class="card-title"><b>INGRESA TUS DATOS</b></h4>
                    <div class="social-line">
                          <a href="#pablo" class="btn btn-just-icon btn-link">
                            <i class="fa fa-facebook-square"></i>
                          </a>
                          <a href="#pablo" class="btn btn-just-icon btn-link">
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a href="#pablo" class="btn btn-just-icon btn-link">
                            <i class="fa fa-google-plus"></i>
                          </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">assignment_ind</i>
                            </span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nro. Cédula">
                        @error('email')
                            <span class="invalid-feedback text-center" role="alert">
                                <b>{{ $message }}</b>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock</i>
                            </span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback text-center" role="alert">
                                <b>{{ $message }}</b>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row mb-2 text-center">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('INGRESAR') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
