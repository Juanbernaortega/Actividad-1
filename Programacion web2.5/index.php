<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" sizes="96x96" href="img/logo2.png">
  <meta charset="utf-8">
  <title>Programacion Web2.5</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="css/estilos.css">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body >
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.html" title="Home"><img alt="" src="img/icon.png"></a>
        </div>
      </div>
      <div class="col-md-12">
        <h1>
        MANTENIMIENTO DE EQUIPOS 
        </h1>
        <a class="btn btn-full" href="#presentacion">Empezar</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="img/icon.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#presentacion">INICIAR</a></li>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>
  <!-- #header -->
  <section class="about" id="presentacion">
  

       <div class="contenedor-form">
        <div class="toggle">
            <span> REGISTRAR</span>
        </div>
        
       <div class="formulario">
            <img class="login__img" src="./img/uso.png">
           <h2 class="login__title">  <span> INICIAR SECCIÓN </span> </h2>
          <form action="validar.php" method="post">
                <input type="text" name="mail" class="form-control" placeholder="&#128100; Usuario" required>
                <input type="password" name="pass"  class="form-control" placeholder="&#x1F512; Contraseña" required>
                <input type="submit" value="ENTRAR">
            </form>
            <br>
              <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
        </div>
        
        <div class="formulario">
            <h3>REGISTRAR DATOS</h3>
            <BR>
            <h4>Datos de Usuario</h4>
             <form method="post" action="" >
            <input type="text" name="realname" class="form-control"  required placeholder="Ingrese su nombre" >
            <input type="text"  name="nick" class="form-control"  required placeholder="Ingresa su email" >
            <input type="text" name="pass" class="form-control" required placeholder="Ingrese su contraseña" >
             <input type="text" name="rpass" class="form-control" required placeholder="Repita su contraseña" >
            <input type="submit" name="submit" value="Registrar" class="boton-registrar">
            </form>
        </div>
      
    </div>

<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
</section>

  <!-- About -->

 

  

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © unicor
            </p>
            <div class="credits">
             <img src="img/logo2.png" width="50">
              <a href="https://www.unicordoba.edu.co/"> Universidad</a> de Córdoba 
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#presentacion">Iniciar</a>
              </li>

              <li  id="logo" class="list-inline-item">
                <a href="#definicion">Empezar</a>
              </li>

            

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>

