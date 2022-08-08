<!doctype html>
<!-- -->
<html>

<title>Automatiza Colombia : Nosotros</title> <!-- Titulo para la pestaña -->
<link rel="icon" href="imagenes/icons/logo1.jpeg">

<<?php
    require_once("head.php");
    ?> <body>

    <!--Se coloca el header-->
    <?php
    require_once("header.php");
    ?>

    <div class="container-titulo">
        <img src="imagenes/servicios/servicios.jpg" alt="servicios">
        <div class="first-txt">Servicios</div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <p class="float-start" style="font-size:1.3rem; margin-top: 10px;"> Buscamos que los requerimientos de nuestros clientes sean cubiertos en su totalidad. A su vez, brindando calidad y garantía en nuestros procesos.</p>
           
        </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 10px;">
  <div class="col-10 col-sm-5 col-md-3 col-xl-2">
            <div class="card  bg-dark text-white ">
                <img src="imagenes/servicios/scada.png" class="card-img" alt="scada" style=" filter: opacity(0.3) drop-shadow(0 0 0 yellow); ">
                <div class="row card-img-overlay d-flex align-content-around justify-content-center">
                    <h5 class="card-title">Automatización Industrial</h5>
                    <p class="card-text">Diseño, asesoría y desarrollo de proyectos de esta indole.</p>
                    <button class="col-6 btn btn-light" style="color: var(--three-bg-color);"> Leer más</button>

                </div>
            </div>
        </div>
        <div class="col-10 col-sm-5 col-md-3 col-xl-2">
            <div class="card  bg-dark text-white " style="background: rgba(250,140,50, 0.6);">
              
                    <img src="imagenes/servicios/board.png" class="card-img" alt="board" style=" filter: opacity(0.3) drop-shadow(0 0 0 #008dcd); ">
                             <div class="row card-img-overlay d-flex align-content-around justify-content-center">
                    <h5 class="card-title">Tableros Eléctricos</h5>
                    <p class="card-text">Fabricación, implementación y modificación.</p>
                    <button class="col-6 btn btn-light" style="color: var(--three-bg-color);"> Leer más</button>

                </div>
            </div>
        </div>

        <div class="col-10 col-sm-5 col-md-3 col-xl-2">
            <div class="card  bg-dark text-white ">
                <img src="imagenes/servicios/maquinaria.jpg" class="card-img " alt="maquinaria" style="filter: opacity(0.3) drop-shadow(0 0 0 #8fd000); ">
                <div class="row card-img-overlay d-flex align-content-around justify-content-center">
                    <h5 class="card-title">Maquinaria y equipos industriales</h5>
                    <p class="card-text">Instalación y mantenimiento correctivo eléctrico.</p>
                    <button class="col-6 btn btn-light" style="color: var(--three-bg-color);"> Leer más</button>

                </div>
            </div>
        </div>

        <div class="col-10 col-sm-5 col-md-3 col-xl-2">
            <div class="card  bg-dark text-white ">
                <img src="imagenes/servicios/repuestos.png" class="card-img" alt="repuestos" style=" filter: opacity(0.3) drop-shadow(0 0 0 #e26bbf); ">
                <div class="row card-img-overlay d-flex align-content-around justify-content-center">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text">Repuestos eléctricos y neumáticos.</p>
                    <button class="col-6 btn btn-light" style="color: var(--three-bg-color);"> Leer más</button>

                </div>
            </div>
        </div>


    </div>


    <?php
    require_once("footer.php");
    ?>


    </body>

</html>