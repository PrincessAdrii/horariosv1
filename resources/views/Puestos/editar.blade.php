
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Puestos/tabla")
@endsection

@section("contenido2")

    <h1>Aqui va mi formulario html de insertar</h1>
@endsection

@section("contenido3")
<h1>editando</h1>
<form action="{{route('puestos.update',$puesto->id)}}" method="POST">
  @csrf
    <div class="row mb-3">
      <label for="nombre"  class="col-sm-2 col-form-label" >id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="idPuesto" value="{{$puesto->idPuesto}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidoP"  class="col-sm-2 col-form-label">Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombrePuesto" value="{{$puesto->nombrePuesto}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="email"  class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="tipo" value="{{$puesto->tipo}}">
        </div>
      </div>

    
   

     <button type="submit" class="btn btn-primary">editar</button>
  </form>
  @endsection