@extends('layouts.baseindex')

@section('title', 'Añadir Personal')

@section('create')
<form class="row g-12">
    <div class="col-md-4">
        <label for="inputTdocumento" class="form-label">Tipo Documento</label>
        <select id="inputTdocumento" class="form-select">
          <option selected>Seleccione TD</option>
          <option value="1">TI</option>
          <option value="2">CC</option>
          <option value="3">CE</option>
        </select>
      </div>
    <div class="col-md-4">
      <label for="inputNdocumento" class="form-label">Nº Documento</label>
      <input type="number" class="form-control" id="inputNdocumento">
    </div>
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="inputNombre">
    </div>
    <div class="col-md-6">
      <label for="inputApellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
    </div>
    <div class="col-md-6">
      <label for="inputCorreo" class="form-label">Correo</label>
      <input type="email" class="form-control" id="inputCorreo" placeholder="Ingrese correo...">
    </div>
    <div class="col-md-2">
        <label for="inputTelefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="inputTelefono">
      </div>

    <div class="col-md-2">
      <label for="inputCargo" class="form-label">Cargo</label>
      <select id="inputCargo" class="form-select">
        <option selected>Seleccione Cargo</option>
        <option value="1">Instructor</option>
        <option value="2">Aprendiz</option>
        <option value="3">Otro</option>
      </select>
    </div>


    <div class="col-6">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="col-6">
      <button class="btn btn-danger">
        <a href="{{route ('admin.index')}}">Cancelar</a>
      </button>
    </div>
  </form>

@endsection
