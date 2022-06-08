@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Comprobante para Proveedores') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('createcomp')}}" style="margin-top: 15px; margin-left: 15px">Agregar Nuevo Comprobante</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio x Unidad</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total a pagar</th>
                            <th scope="col">Proveedor</th>
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
                            <td>{{ $producto->priceUnit }}</td>
                            <td>{{ $producto->cantCompra }}</td>
                            <td>{{ $producto->priceTot }}</td>
                            <td>{{ $producto->inaProv }}</td>
                            <td>{{ $producto->dateCompra }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{url('compras/'.$producto->id.'/editcomp')}}">Editar</a>

                                <form action="{{ url('compras/'.$producto->id) }}" method="post">
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
