@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Categorias') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('createcat')}}" style="margin-top: 15px; margin-left: 15px">Agregar una Nueva Categoria</a>
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
                            <td>{{ $producto->codCat }}</td>
                            <td>{{ $producto->nameCat }}</td>
                            <td>{{ $producto->descrCat }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{url('categorias/'.$producto->id.'/editcat')}}">Editar</a>

                                <form action="{{ url('categorias/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este categoria?')" value="Eliminar"></input>
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
