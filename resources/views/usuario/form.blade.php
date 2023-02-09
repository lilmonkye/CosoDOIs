<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




@if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>



@endif

<div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" value="{{ isset($usuario->Nombre)?$usuario->Nombre:old('Nombre')}}" class="form-control" name="Nombre">
</div>

<div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Apellidos</label>
    <input type="text" value="{{ isset($usuario->Apellidos)?$usuario->Apellidos:old('Apellidos')}}" class="form-control" name="Apellidos">
</div>

<div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Numero de trabajador</label>
    <input type="text" value="{{ isset($usuario->Numerotrabajador)?$usuario->Numerotrabajador:old('Numerotrabajador')}}" class="form-control" name="Numerotrabajador">
</div>

<div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
    <input type="email" value="{{ isset($usuario->Correo)?$usuario->Correo:old('Correo')}}" class="form-control" name="Correo" >
</div>

<div class="mb-3 ">
    <label for="exampleInputPassword1" style="display: block" class="form-label">Contraseña</label>
    <input type="password" value="{{ isset($usuario->Contraseña)?$usuario->Contraseña:old('Contraseña')}}" class="form-control" id="txtPassword" name="Contraseña">
</div>

<div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Aval de uso del DOI</label>
    <input type="text" value="{{ isset($usuario->Aval)?$usuario->Aval:old('Aval')}}" class="form-control" name="Aval">
</div>

<div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Dependencia a la que pertenece</label>
    <input type="text" value="{{ isset($usuario->Dependencia)?$usuario->Dependencia:old('Dependencia')}}" class="form-control" name="Dependencia">
</div>

<div class="text-center"><input type="submit" class="btn btn-primary" value="{{$modo}}"></div>

<a href="{{ url('usuario/')}}" class="btn btn-light">Regresar </a>
