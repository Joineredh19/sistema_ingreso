<html>
  <head>
    <link rel="stylesheet" href="/css/normalize.css">
    <LINK REL=StyleSheet HREF="/css/login.css" TYPE="text/css" MEDIA=screen>
      <link rel="stylesheet" href="/css/sweetalert2.css">
      <link rel="stylesheet" href="/css/material.min.css">
      <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="/css/main.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="/js/jquery-1.11.2.min.js"><\/script>')</script>
      <script src=" /js/material.min.js" ></script>
      <script src=" /js/sweetalert2.min.js" ></script>
      <script src=" /js/jquery.mCustomScrollbar.concat.min.js " ></script>
      <script src=" /js/main.js" ></script>

  </head>
  
  <body>
    <div class="wrapper">
      <div class="logo"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/1045px-Sena_Colombia_logo.svg.png" alt=""> </div>
      &nbsp&nbsp
      <div class="text-center mt-4 name"> Sistema Ingreso </div>
      &nbsp&nbsp
      <form class="p-3 mt-3">
          <div class="form-field d-flex align-items-center"> 
            <div class="form-group">
              <select class="selectpicker show-tick" name="status">
                <option value="in">Hora de Entrada</option>
                <option value="out">Hora de Salida</option>
              </select>
            </div>
          </div>
          <div class="form-field d-flex align-items-center"> 
            <span class="fas fa-key"></span> 
            <input type="password" name="ide" id="ide" placeholder=" ID de Empleado">
          </div>
          <button class="btn mt-3">Ingreso</button>
      </form>
      &nbsp
      &nbsp&nbsp
      <div class="text-center mt-4 name">
        <a href="/login" >¿Eres admin?</a>
      </div>
    </div>
    <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
    <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
    <script type="text/javascript">
      $(function() {
        var interval = setInterval(function() {
          var momentNow = moment();
          $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
          $('#time').html(momentNow.format('hh:mm:ss A'));
        }, 100);}
        
</script>      
  </body>
</html>
