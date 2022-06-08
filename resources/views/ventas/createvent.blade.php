@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Comprobantes para las Ventas') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('storevent')}}">
                        @csrf
                        @include('ventas.formvent')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
