@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Comprobante para Ventas') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('createvent')}}" style="margin-top: 15px; margin-left: 15px">Agregar Nuevo Comprobante</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Total a pagar</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">Fecha</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($dataproduct as $producto)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $producto->inaProd }}</td>
                            <td>{{ $producto->cantVenta }}</td>
                            <td>{{ $producto->nameCliente }}</td>
                            <td>{{ $producto->priceTot }}</td>
                            <td>{{ $producto->dateVenta }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{url('ventas/'.$producto->id.'/editvent')}}">Editar</a>

                                <form action="{{ url('ventas/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este comprobante?')" value="Eliminar"></input>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
