<?php
session_start();
// session_destroy();
if (!isset($_SESSION["usuario"])) {
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
                    <?php if ( $_SESSION["usuario"]["rol"] == "admin"):?>
                        <li><a href="admin.php">Administrar</a></li>
                    <?php endif; ?>
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
                    <div class="cars">
                        <h2>Reservas</h2>
                        <div class="list" id="list">
                            <div class="item-list" id="item-list">
                                <figure><img src="img/renault/Captur.jpg"/></figure>
                                <p>Captur - 2022</p>
                            </div>
                            <div class="item-list" id="item-list">
                                <figure><img src="img/renault/Koleos.jpg"/></figure>
                                <p>Koleos - 2020</p>
                            </div>
                            <div class="item-list" id="item-list">
                                <figure><img src="img/suzuki/vitara.jpg"/></figure>
                                <p>Vitara - 2021</p>
                            </div>
                            <!-- <div class="item-list" id="item-list">
                                <figure><img src="img/suzuki/vitara.jpg"/></figure>
                                <p>Vitara - 2021</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="cars">
                        <h2>Lista de deseos</h2>
                        <div class="list" id="list">
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
                        </div>
                    </div>
                </div>
                <div class="others">
                    <div class="buttons">
                        <a class="button green" href="#">Editar perfil</a>
                        <a class="button red" href="php/exit.php">Cerrar sesión</a>
                    </div>
                    <div class="history">
                        <h2>Historia de compras</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eveniet ut ipsum possimus officiis ipsam mollitia dicta ullam eius eum, rem tempora voluptatum quod earum. Aspernatur illum, voluptas minima inventore hic modi, provident et dignissimos libero, itaque nihil eveniet! Aperiam fugiat itaque distinctio accusamus blanditiis dolorem est tempora praesentium atque.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sunt nesciunt, vel consequuntur beatae esse eveniet ipsam totam eum? Ab ut quibusdam mollitia assumenda amet id in autem quam, temporibus eaque, quaerat optio laborum. In, inventore tenetur sunt quasi ullam sit temporibus ipsum. Accusantium doloremque iure nesciunt eum tempore provident, optio voluptatem beatae nulla, pariatur animi incidunt facere culpa magni earum corporis enim eveniet ea quasi voluptatibus ab? Aperiam iste hic delectus velit, minus repellendus voluptatibus quia molestiae odio at sequi dolorem accusamus officia ab temporibus suscipit ipsum cumque recusandae, laboriosam voluptas sed voluptates ipsa excepturi sapiente? Commodi, eos ipsum.
                       
                        </p>
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

    <!-- <script>
        (async function getAllData(){
            async function getImage($url){
                $promise = await fetch($url);
                $dataList = await $promise.json();
                return $dataList;
            }
            function createHTMLString(item, number){
                return `
                        <div class="item-list">
                            <figure>
                                <img src="${item.message}" width="100px" height="100px"/>
                            </figure>
                            <p>Mascota ${number}</p>
                        </div>
                        `;
            }
            function createTemplate(HTMLString){
                $html = document.implementation.createHTMLDocument();
                $html.body.innerHTML = HTMLString;
                return $html.body.children[0];

            }
            $container_reservation = document.getElementById('list');
            $container_wish = document.getElementById('wish-list');

            $container_reservation.children[0].remove();
            $container_wish.children[0].remove();
            for(let i=0;i<=3;i++){
                data = await getImage('https://dog.ceo/api/breeds/image/random');
                HTMLString = createHTMLString(data, i);
                item = createTemplate(HTMLString);
                $container_reservation.append(item);
            }
            for(let i=0;i<=3;i++){
                data = await getImage('https://dog.ceo/api/breeds/image/random');
                HTMLString = createHTMLString(data, i);
                item = createTemplate(HTMLString);
                $container_wish.append(item);
            }
        })();

    </script> -->

</body>
</html>