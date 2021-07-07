<?php
require("php/conn.php");
require("php/helpers.php");
session_start();
// session_destroy();
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"]["rol"]!="admin") {
    header("Location:index.html");
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/homeStyle.css">
    <title>Mis datos</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <header class="header">
                <figure class="log-cont"><img src="img/icon/log-w.png" alt="user-icon"> <figcaption>PATITO<span>CAR</span></figcaption></figure>
                <div class="user-det">
                    <p>FULANO MENGANO DE TAL</p>
                    <figure class="user-log"><img src="img/icon/user.jpg" alt=""></figure>
                </div>
            </header>
            <aside class="aside">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Vehiculos</a></li>
                    <li><a href="">Ofertas para mi</a></li>
                    <li><a href="">Garantias</a></li>
                    <li><a href="">Contactos</a></li>
                    <li><a class="button red" href="php/exit.php">Cerrar sesión</a></li>
                    <!-- <li><a href="index.html">cerrar sesion</a></li> -->
                </ul>
            </aside>
            <div class="body">
                <div class="data">
                    <div class="my-data">
                        <h2>Mis datos</h2>
                        <p>Nombre: Pepito Pepe</p>
                        <p>Apellidos: Pepe</p>
                        <p>Carnet de Identidad: 11565485 CBB</p>
                        <p>Celular: 12345678</p>
                        <p>Email: PepitoPepe@gmail.com</p>
                        <p>Dirección: Cochabamba - El rio del nilo</p>
                    </div>
                    <div class="user">
                        <h2>Usuarios</h2>
                        <?php 
                           $usuarios = get_user($conn);                           
                        ?>

                        <div class="list" id="list">
                            <?php if (!empty($usuarios) and mysqli_num_rows($usuarios) > 0):?>
                              <table border="1" cellspacing="0">
                                 <tr>
                                    <th>CI</th>
                                    <th>NOMBRES</th>
                                    <th>APELLIDOS</th>
                                    <th>TELEFONO</th>
                                    <th>DIRECCION</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>ROL</th>
                                    <th>OPCIONES</th>
                                 </tr>                                 
                                 <?php while($usuario = mysqli_fetch_assoc($usuarios)):?>
                                 <tr>
                                    <td><?=$usuario["ci"]?></td>   
                                    <td><?=$usuario["nombre"]?></td>   
                                    <td><?=$usuario["apellidos"]?></td>   
                                    <td><?=$usuario["telefofo"]?></td>   
                                    <td><?=$usuario["direccion"]?></td>   
                                    <td><?=$usuario["email"]?></td>   
                                    <td><?= pass(substr($usuario["password"],0,5))?></td>   
                                    <td><?=$usuario["rol"]?></td>  
                                    <td>
                                       <a class="button yellow" href="">Inhabilitar</a>
                                       <a class="button red" href="php/deleteuser.php?id=<?=$usuario["ci"]?>">Eliminar</a>
                                    </td>  
                                 </tr>
                                 <?php endwhile; ?>
                              </table>
                              <?php endif; ?>
                        </div>
                    </div>
                    <div class="user">
                        <h2>Vehiculos</h2>
                        <!-- <div class="list" id="list">
                            <div class="item-list" id="item-list">
                                <figure><img src="img/suzuki/swift.jpg"/></figure>
                                <p>Swift - 2022</p>
                            </div>

                            <div class="item-list" id="item-list">
                                <figure><img src="img/renault/Duster.jpg"/></figure>
                                <p>Duster - 2020</p>
                            </div>

                            <div class="item-list" id="item-list">
                                <figure><img src="img/suzuki/xl7.jpg"/></figure>
                                <p>X17 - 2021</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    if (isset($_SESSION['exito'])) {
        unset($_SESSION['exito']);
    }
    ?>
</body>
</html>