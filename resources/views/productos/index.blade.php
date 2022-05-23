@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('create')}}" style="margin-top: 15px; margin-left: 15px">Agregar Nuevo Producto</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($dataproduct as $producto)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $producto->codProd }}</td>
                            <td>{{ $producto->nameProd }}</td>
                            <td>{{ $producto->descrProd }}</td>
                            <td>{{ $producto->priceUnit }}</td>
                            <td>{{ $producto->cantExist }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{url('productos/'.$producto->id.'/edit')}}">Editar</a>

                                <form action="{{ url('productos/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este producto?')" value="Eliminar"></input>
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
