@extends('layouts.baseindex')

@section('title', 'Añadir Personal')

@section('content')


<form class="row g-3">
    @csrf
    <select class="form-select" aria-label="Default select example">
        <option selected>Tipo de Documento</option>
        <option value="1">TI</option>
        <option value="2">CC</option>
        <option value="3">CE</option>
      </select>
    <div class="col-md-6">
        <label for="inputid" class="form-label">Nº Identificacion</label>
        <input type="number" class="form-control" id="inputid" placeholder="Número de identificación...">
      </div>
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
    </div>
    <div class="col-12">
      <label for="inputApellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
    </div>
    <div class="col-12">
      <label for="inputCorreo" class="form-label">Correo</label>
      <input type="text" class="form-control" id="inputCorreo" placeholder="Correo">
    </div>
    <div class="col-md-6">
      <label for="inputTelefono" class="form-label">Telefono</label>
      <input type="number" class="form-control" id="inputTelefono">
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Cargo</option>
        <option value="1">Aprendiz</option>
        <option value="2">Instructor</option>
        <option value="3">Otro</option>
      </select>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>

@endsection
