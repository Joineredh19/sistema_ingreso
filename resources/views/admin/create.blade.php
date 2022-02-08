@extends('layouts.baseindex')

@section('title', 'Añadir Personal')

@section('create')
<br>
<br>
<br>
<form class="row" action="{{route ('admin.index')}}" method="POST">
@csrf
    <div class="col-md-6">
        <label for="inputTdocumento" class="form-label">Tipo Documento</label>
        <br>
        <select id="inputTdocumento" class="form-select" name="Tdocumento">
          <option selected>Seleccione TD</option>
          <option value="TI">TI</option>
          <option value="CC">CC</option>
          <option value="CE">CE</option>
        </select>
      </div>
    <div class="col-md-6">
      <label for="inputNdocumento" class="float-left">Nº Documento</label>
      <input type="number" class="form-control" id="inputNdocumento" name="Ndocumento">
    </div>
    <br>
    <div class="col-md-6">
      <label for="inputNombre"  class="float-left">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" name="Nombre">
    </div>
    <br>
    <div class="col-md-6">
      <label for="inputApellido"  class="float-left">>Apellido</label>
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="Apellido">
    </div>
    <br>
    <div class="col-md-6">
      <label for="inputCorreo"  class="float-left">Correo</label>
      <input type="email" class="form-control" id="inputCorreo" placeholder="Ingrese correo..." name="Correo">
    </div>
    <br>
    <div class="col-md-2">
        <label for="inputTelefono"  class="float-left">Telefono</label>
        <input type="text" class="form-control" id="inputTelefono" name="Telefono">
      </div>
      <br>
    <div class="col-md-2">
      <label for="inputCargo" class="form-label">Cargo</label>
      <select id="inputCargo" class="form-select" name="Cargo">
        <option selected>Seleccione Cargo</option>
        <option value="Instructor">Instructor</option>
        <option value="Aprendiz">Aprendiz</option>
        <option value="Otro">Otro</option>
      </select>
    </div>

    <div class="col-6">
        <br></br>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="col-6">
<br></br>
        <a  class= "btn btn-danger" href="{{route ('admin.index')}}">Cancelar</a>

    </div>
  </form>

@endsection
