@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Categorias') }}</div>
                <div class="card-body">
                    <form method = "post" action = " {{ url('/categorias/'.$productos->id.'/editcat')}}">
                        @csrf
                        {{ method_field('POST') }}
                        @include('categorias.formeditcat')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection