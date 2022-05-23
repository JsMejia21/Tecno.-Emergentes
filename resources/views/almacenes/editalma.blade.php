@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de almacenes') }}</div>
                <div class="card-body">
                    <form method = "post" action = " {{ url('/almacenes/'.$productos->id.'/editalma')}}">
                        @csrf
                        {{ method_field('POST') }}
                        @include('almacenes.formeditalma')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection