@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Comprobantes para las Ventas') }}</div>
                <div class="card-body">
                    <form method = "post" action = " {{ url('/ventas/'.$productos->id.'/editvent')}}">
                        @csrf
                         {{ method_field('POST') }}
                         @include('ventas.formeditvent')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
