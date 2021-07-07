<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/icon/log-b.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/inStyle.css">
    <link rel="stylesheet" href="styles/upStyle.css" />
    <title>PatitoCar</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="nav-top">
          <a class="log" href="index.php"><img src="img/icon/log-w.png" alt="logo"/></a>
          <a class="tit" href="index.php">PATITOCAR</a>
        </div>
        <div class="but">
          <?php if (isset($_SESSION["usuario"])):?>
          <a href="home.php"><input type="button" value="Volver"></a>
          <?php else:?>
          <a href="javascript:upopen()"> <input type="button" value="Registrarse" /></a>
          <a href="javascript:inopen()"><input type="button" value="Acceder" /></a>
          <?php endif;?>
        </div>

        <div class="nav-bot">
          <ul>
            <li class="nav-item" ><a href="index.php">Inicio</a></li>
            <li class="nav-item" ><a href="#">Contactos</a></li>
            <li class="nav-item" ><a href="cat.html">Catalogo</a></li>
            <li class="nav-item" ><a href="#">Servicio Tecnico</a></li>
          </ul> 
          <input class="search" type="text" placeholder="Buscar"/>
        </div>
      </nav>
    </header>

    <section class="slide">
      <!-- <ul>
        <li><img src="img/renault/Ban-Duster.jpg" alt="img" /></li>
        <li><img src="img/renault/Ban-Koleos.jpg" alt="img" /></li>
        <li><img src="img/renault/Ban-kwid.jpg" alt="img" /></li>
        <li><img src="img/suzuki/Ban-suzuki.jpg" alt="img" /></li>
      </ul> -->
    </section>

    <h2 class="more-tit">LOS MAS VENDIDOS</h2>
    
    <section class="more-sale">
      <div class="m-item">
        <img src="img/renault/Koleos.jpg" alt="car">
        <p>KOLEOS INTENS 4x4 CVT</p>
      </div>
      <div class="m-item">
        <img src="img/renault/Duster.jpg" alt="car">
        <p>DUSTER INTENS 1.6MT 4x4 </p>
      </div>
      <div class="m-item">
        <img src="img/renault/Oroch.jpg" alt="car">
        <p>DUSTER OROCH INTENS 4x4 MT</p>        
      </div>
      <div class="m-item">
        <img src="img/suzuki/scross.jpg" alt="car">
        <p>SCROSS TURBO 4x4 2.3 CVT</p>
      </div>
    </section>
    
    <h3 class="tit-org">JUNTA DIRECTIVA</h3>

    <section class="organigrama">
      <img src="img/organi.png" alt="lisorg" />
    </section>

    <footer>
      <div class="foot-bar">
        <div class="foot-icon">          
          <a href="index.php"><img src="img/icon/log-w.png" alt="logo"/></a>
        </div>

        <div class="foot-we">
          <h4>Sobre nosotros</h4>
          <p>Somos una concesionaria enfocafa en ofrecer los mejores vehiculos motorizados</p>
        </div>

        <div class="foot-conta">
          <h4>Contactos</h4>
          <p>Telf: +591 77845734</p>
        </div>

        <div class="foot-ubic">
          <h4>Ubicacion</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="foot-rrss">
          <h4>Nuestras redes</h4>
          <img src="img/icon/facebook.png" alt="fb" />
          <img src="img/icon/instagram.png" alt="in" />
          <img src="img/icon/messenger.png" alt="fbm" />
          <img src="img/icon/whatsapp.png" alt="wa" />
          <img src="img/icon/youtube.png" alt="wa" />
        </div>
      </div>
    </footer>


    <!-------------------------- FORMUNARIO DE ACCESO------------------------->

    <div class="login-box" id="login-box">
      <div class="avatar">
        <img src="img/icon/log-w.png" alt="Avatar Image">
      </div>
      <h1>Ingresar</h1>
      <form action="php/acceder.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Correo Electronico</label>
        <input type="text" placeholder="Correo Electronico" name="email">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="pass">
        <input type="submit" value="Acceder" name="acceder">
        <a href="#">Olvido su contraseña?</a><br>
        <!-- <a href="#">Accede su cuenta</a> -->
      </form>
      <!-- <a href="index.html"><i class="exit"><span></span></i></a> -->
      <a href="javascript:inclose()"><i class="exit"><span></span></i></a>
      
    </div>

    <!-------------------------- FORMUNARIO DE REGISTRO------------------------->

    <div class="signup-box" id="signup-box">
      <div class="avatar">
        <img src="img/icon/log-w.png" alt="Avatar Image">
      </div>

      <h1>Registro</h1>
      <form action="php/registro.php" method="POST">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">

        <label for="ci">Cedula de identidad</label>
        <input type="text" name="ci" id="ci" placeholder="Ingrese su CI">

        <label for="telf">Numero de celular</label>
        <input type="text" name="telf" id="telf" placeholder="Ingrese su Nº Celular">

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Ingrese su correo">

        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" placeholder="Ingrese su contraseña">

        <label for="registar">Estoy de acuerdo con los <a href="#">terminos y condiciones</a></label>
        <input type="submit" name="registro" value="Registrar" id="registar">

        <!-- <label for="" id="tengo"><a href="signin.html">Ya tengo una cuenta</a></label> -->
        <label for=""><a href="javascript:swap()">Ya tengo una cuenta</a></label>
      </form>

      <!-- <a href="index.html"><i class="exit"><span></span></i></a> -->
      <a href="javascript:upclose()"><i class="exit"><span></span></i></a>
    </div>


    <!-------------------------- FORMUNARIO DE SOLICITUD------------------------->

<!-- 
    <div class="sol-box">
      <div class="avatar">
        <img src="img/icon/log-w.png" alt="Avatar Image">
      </div>

      <h1>Formulario de solicitud</h1>
      <form action="">
        <label for="">Nombre completo</label>
        <input type="text" name="nom" id="nom" placeholder="Nombres y Apellidos">

        <label for="">Apellidos</label>
        <input type="text" name="ape" id="nom">

        <label for=""></label>
      </form>
    </div> -->


    <script>
      function inopen(){
        document.getElementById("signup-box").style.display="none";
        document.getElementById("login-box").style.display="block";
      }

      
      function inclose(){
        document.getElementById("login-box").style.display="none";
      }
      
      function upopen(){
        document.getElementById("signup-box").style.display="block";
        document.getElementById("login-box").style.display="none";
      }
      
      function upclose(){
        document.getElementById("signup-box").style.display="none";
      }

      function swap(){
        document.getElementById("signup-box").style.display="none";
        document.getElementById("login-box").style.display="block";
      }
    </script>





  </body>
</html>
