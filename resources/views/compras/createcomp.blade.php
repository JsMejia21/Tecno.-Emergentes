@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Comprobante para Proveedores') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('storecomp')}}">
                        @csrf
                        @include('compras.formcomp')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
