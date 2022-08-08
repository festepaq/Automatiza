<!doctype html>
<!-- -->
<html>

<title>Automatiza Colombia : Inicio</title> <!-- Titulo para la pestaña -->
<link rel="icon" href="imagenes/icons/logo1.jpeg">
<?php
require_once("head.php"); 
?>

<body>

    <!--Se coloca el header-->
<?php
require_once("header.php"); 
?>
    
    
    <!-- Se coloca un slider de fotos -->

    <section id="container-slider">
        <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
        <ul class="listslider">
            <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
            <li><a itlist="itList_1" href="#"></a></li>
            <li><a itlist="itList_2" href="#"></a></li>
        </ul>
        <ul id="slider">
            <li style="background-image: url(imagenes/slider/img1.jpg); z-index:0; opacity: 1;">
                <div class="content_slider">
                    <div>
                        <h2>Proyectos de automatización industrial</h2>
                        <p>Somos una organización capaz de ofrecerle confianza y asesoría en el desarrollo de estos, con
                            el fin de estandarizar y simplificar sus procesos, permitiéndole enfocar sus esfuerzos en el
                            crecimiento de su empresa.</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
            <li
                style="background-image: url('https://cdn.pixabay.com/photo/2018/02/20/10/28/business-3167295_960_720.jpg'); ">
                <div class="content_slider">
                    <div>
                        <h2>Negocios</h2>
                        <p>Recursos, guías, herramientas y consejos para emprender, crear tu empresa o iniciar un
                            negocio exitoso</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
            <li
                style="background-image: url('https://cdn.pixabay.com/photo/2015/07/17/22/42/typing-849806_960_720.jpg'); ">
                <div class="content_slider">
                    <div>
                        <h2>Estrategias de negocio</h2>
                        <p>Las estrategias de negocio representan planes o métodos...</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
        <p style="font-size: 1.4rem;">Contamos con un equipo de trabajo profesional y años de experiencia que brindan seguridad y confianza, lo cual nos permite prestar un servicio ejemplar en todo el territorio nacional.</p>

        </div>
    </div>
    
    <?php
require_once("footer.php");
    ?>

</body>

</html>