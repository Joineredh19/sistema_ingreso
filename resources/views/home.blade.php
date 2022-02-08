@extends('layouts.app')

@section('title', 'home')

@section('content')


    <div class="wrapper">
      <div class="logo"> <img src="/img/logo.png" alt=""> </div>

      <div class="text-center mt-4 name"> Sistema de Ingreso  </div>

      <form class="p-3 mt-3" method="" action="">
        @csrf
          <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="Id" id="Id" placeholder="Id">

          </div>


          <button type="submit" class="btn mt-3">Ingreso</button>
      </form>
      <div id='reloj'>
        <div class='reloj-contenedor' id='contenedor'>
            <div id='hora'>Reloj Digital</div>
            <div id='fecha'>con javaSript </div>
        </div>

     </div>

    </div>


@endsection
