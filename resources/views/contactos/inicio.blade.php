@extends('layouts/agenda')

@section('tituloPagina','Contactos')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <h3>Contactoss</h3>
                <a href="{{route('contactos.create')}}" class="btn btn-primary">
                    <span class="fas fa-user-plus">Agreagar Nuevo contacto
                </a>
                <hr>
                @if ($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
            {{ $mensaje }}
            </div>
            @endif
            </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12">
                        <table class="table   table-dark table-sm table-hover" id="tablaCategorias">
                        <thead>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($listado as $item )
                                
                            
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->telefono}}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nombre_categoria }}</td>
                                <td>
                                <a href="{{route('contactos.edit',$item->id_contacto)}}"
                                     class="btn btn-warning"><span class="fas fa-edit">Editar</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('contactos.show',$item->id_contacto)}}"
                                        class="btn btn-danger btn-sm"><span class="fas fa-trash-alt">
                                        Eliminar </a>
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
</div>
@endsection 
@section('dataTable')
    <script>
        $(document).ready(function(){
            $('#tablaCategorias').DataTable();
        });
    </script>
@endsection