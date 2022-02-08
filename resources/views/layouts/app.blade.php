<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <LINK REL=StyleSheet HREF="/css/login.css" TYPE="text/css" MEDIA=screen>
      <link rel="stylesheet" href="/css/sweetalert2.css">
      <link rel="stylesheet" href="/css/material.min.css">
      <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="/css/main.css">
      <link href="css/reloj.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="/js/jquery-1.11.2.min.js"><\/script>')</script>
      <script src=" /js/material.min.js" ></script>
      <script src=" /js/sweetalert2.min.js" ></script>
      <script src=" /js/jquery.mCustomScrollbar.concat.min.js " ></script>
      <script src=" /js/main.js" ></script>
      <script src="js/reloj.js"></script>
    <title>@yield('title') - Laravel App</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800"   onload="mostrarReloj()">
    <nav class="flex py-5 bg-indigo-500 text-white">
        <!-- Navbar content -->
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">Sistema Ingreso</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-6">
                <a href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px4 rounded-md">Ingresar</a>
            </li>
            <li>
                <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registro</a>
            </li>
        </ul>
      </nav>

    @yield('content')



  </body>
</html>
