@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>{{ __('Mensaje') }}</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Bienvenido al panel de Administración de  Casa Comercial Ridel!') }}
                    <hr>
                    <h6>Selecciona una de las Opciones de la Barra de Navegación</h6>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection