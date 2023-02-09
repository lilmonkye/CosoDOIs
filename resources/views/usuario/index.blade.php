@extends('layouts.app')

@section('content')
<div class="container">

<script src="https://kit.fontawesome.com/f26995227a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @if(Session::has('mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('mensaje')}}
        </div>
    @endif


<a href="{{ url('usuario/create')}}" class="btn btn-info">Registrar nuevo usuario</a>





<div style="display:flex; flex-direction:column; justify-content:center; align-items:center" class="col-12 p-5">
    <table class="table table-light table-striped tablaregistro">
        <thead class="bg-dark">
            <tr class="text-center tablareghead">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Numerotrabajador</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Aval</th>
                <th scope="col">Dependencia</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $usuarios as $usuario )

            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->Nombre}}</td>
                <td>{{$usuario->Apellidos}}</td>
                <td>{{$usuario->Numerotrabajador}}</td>
                <td>{{$usuario->Correo}}</td>
                <td>{{$usuario->Contraseña}}</td>
                <td>{{$usuario->Aval}}</td>
                <td>{{$usuario->Dependencia}}</td>
                <td>
                    <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-small btn-info"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <div class="input-icons">
                            <input type="submit" onclick="return confirm('¿Esta seguro que desa borrar?')" class="btn fa-input btn-warning " value="&#xf1f8;">
                        </div>
                    </form>
                </td>


            </tr>

            @endforeach
        </tbody>
    </table>
    {!! $usuarios->links() !!}
</div>
</div>
@endsection
