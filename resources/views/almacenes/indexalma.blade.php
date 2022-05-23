@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Almacenes') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('createalma')}}" style="margin-top: 15px; margin-left: 15px">Agregar un Nuevo Almacen</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Código</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($dataproduct as $producto)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $producto->codAlm }}</td>
                            <td>{{ $producto->dirAlm }}</td>
                            <td>{{ $producto->telAlm }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1"  href="{{url('almacenes/'.$producto->id.'/editalma')}}">Editar</a>

                                <form action="{{ url('almacenes/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este almacen?')" value="Eliminar"></input>
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
