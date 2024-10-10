
@extends("plantillas/plantilla2")

@section("contenido1")

@include("puestos/tabla")
@endsection

@section("contenido2")

    <h1>Aqui va mi formulario html de insertar</h1>
@endsection

@section("contenido3")
<h1>Ver</h1>
<form action="{{route('puestos.eliminar', $puesto)}}" method="POST">
  @csrf
 
    <div class="row mb-3">
      <label for="nombre"  class="col-sm-2 col-form-label">Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$puesto->idPuesto}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidoP"  class="col-sm-2 col-form-label">Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="apellidoP" disabled value="{{$puesto->nombrePuesto}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="email"  class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="nombre" name="email" disabled value="{{$puesto->tipo}}">
        </div>
      </div>

    
   

     <button  type="submit" class="btn btn-primary">Está usted seguro??</button>
     <a href="{{route("puestos.index")}}" class="btn btn-primary">regresar</a>
  </form>
  @endsection