@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center p-3 text-secondary" style="background-color: rgb(139, 139, 139) text-color:whitesmoke">Modificar Registro</h1>

<div style="display:flex; flex-direction:column; justify-content:center; align-items:center" >
    <form action="{{url('/usuario/'.$usuario->id)}}" class="p-3 col-4" method="POST" style="background-color:rgb(172, 215, 255)" >
        @csrf
        {{method_field('PATCH')}}
        @include('usuario.form',['modo'=>'Editar']);
    </form>
</div>
</div>
@endsection
