@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Comprobante para Proveedores') }}</div>
                <div class="card-body">
                    <form method = "post" action = " {{ url('/compras/'.$productos->id.'/editcomp')}}">
                        @csrf
                         {{ method_field('POST') }}
                         @include('compras.formeditcomp')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
