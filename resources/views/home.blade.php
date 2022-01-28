@extends('layouts.app')

@section('title', 'home')

@section('content')

<html>
  <head>
    <link rel="stylesheet" href="/css/normalize.css">
    <LINK REL=StyleSheet HREF="/css/login.css" TYPE="text/css" MEDIA=screen>
      <link rel="stylesheet" href="/css/sweetalert2.css">
      <link rel="stylesheet" href="/css/material.min.css">
      <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="/css/main.css">
      <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="/js/jquery-1.11.2.min.js"><\/script>')</script>
      <script src=" /js/material.min.js" ></script>
      <script src=" /js/sweetalert2.min.js" ></script>
      <script src=" /js/jquery.mCustomScrollbar.concat.min.js " ></script>
      <script src=" /js/main.js" ></script>
  </head>

  <body>
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

    </div>
  </body>
</html>


@endsection
