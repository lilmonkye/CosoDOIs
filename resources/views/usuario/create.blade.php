@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center p-3 text-secondary" style="background-color: rgb(139, 139, 139) text-color:whitesmoke">Registrarte</h1>

<div style="display:flex; flex-direction:column; justify-content:center; align-items:center" >
    <form action="{{url('/usuario')}}" class="p-3 col-4" method="POST" style="background-color:rgb(172, 215, 255)" >
        @csrf
        @include('usuario.form',['modo'=>'Registrar']);
    </form>
</div>
</div>
@endsection
