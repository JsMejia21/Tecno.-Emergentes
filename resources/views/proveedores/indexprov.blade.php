@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Proveedores') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('createprov')}}" style="margin-top: 15px; margin-left: 15px">Agregar Un Nuevo Proveedor</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($dataproduct as $producto)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $producto->codProve }}</td>
                            <td>{{ $producto->nameProve }}</td>
                            <td>{{ $producto->dirProve }}</td>
                            <td>{{ $producto->telProve }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1"  href="{{url('proveedores/'.$producto->id.'/editprov')}}">Editar</a>

                                <form action="{{ url('proveedores/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este proveedor')" value="Eliminar"></input>
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
