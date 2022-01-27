
@section('title', 'Login')

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
      <div class="logo"> <img src="../public/img/logo.png" alt=""> </div>
      &nbsp&nbsp
      <div class="text-center mt-4 name"> Ingreso Admin </div>
      &nbsp&nbsp

      <form class="p-3 mt-3" method="POST" action="">
        @csrf
          <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="email" placeholder="Correo">
          </div>
          <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Contraseña">
          </div>
          @error('messages')
          <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}} </p>
          @enderror

          <button type="submit" class="btn mt-3">Login</button>
      </form>

    </div>
  </body>
</html>
