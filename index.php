<?php
    require_once 'parameters.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>EVLE</title>
</head>

<body>
    <?php
    require_once 'includes/barra.php';

    ?>
    <div class="container-fluid mt-5 mb-0">
        <div class="row slider mb-0">
            <div class="col">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/carousel1.jpg" class="d-block w-100" alt="First slide">
                            <div class="carousel-caption d-block">
                                
                                <h3 class="text-light">tenemos un plan diseñado especialmente para tus hijos</h3>
                                <a href="#" class="btn btn-outline-primary btn-block">Saber Más</a>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel3.jpg" class="d-block w-100" alt="Second slide">
                            <div class="carousel-caption d-block">

                                <h3 class="text-light">Contamos con profesores altamente calificados para brindar un servicio de calidad</h3>
                                <a href="#" type="button" class="btn btn-outline-warning btn-block">Saber Más</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel2.jpg" class="d-block w-100" alt="Third slide">
                            <div class="carousel-caption d-block">
                                <h3 class="text-white">Clases para todas las edades</h3>
                                    <a href="#" type="button" class="btn btn-outline-success btn-block">Saber Más</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Carrusel-->

    <!--CONTENEDORES-->

    <div class="back1 jumbotron mb-0">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="text-body">Personal Especializado</h1>
                        <p class="text-body">Nuestros objetivos son muy claros, queremos brindarte la mejor experiencia en el aprendizaje de idiomas en línea es por ello que contamos con profesores en línea que puedan realmente saber cuales son las dificultades a las que te enfrentas al aprender el idioma.</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12  col-xs-12">
                    <img src="img/undraw_teacher_re_sico.svg" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="back2 jumbotron mb-0">
        <div class="container-fluid cont">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-xs-12">
                    <img src="img/undraw_online_learning_re_qw08.svg" alt="img" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="text-body">¿Qué necesitas para empezar?</h1>
                        <p class="text-body">Necesitas tener la aplicación WhatsAppen para poder ser añadido en un grupo donde tendras acceso directo con tu profesor, las clases son por la aplicación Zoom, la profesora o profesor te brindara el link, id y contraseña de zoom, que necesitaras para unirte a la clase. De igual forma tener instalada la aplicación Zoom en el dispositivo que vayas a tomar la clase. Con respecto al material que vas a usar en las clases depende de el curso el que estas interesado y en el que te acabas de inscribir. Te lo hace llegar la asesora academica. Y por ulitmo muchas ganas de estudiar.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="back3 jumbotron mb-0">
        <div class="container-fluid cont">
            <div class="row mx-0 align-items-center justify-content-center text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="text-light">¿Qué garantizamos?</h1>
                        <p class="text-light">Nos basamos conforma el marco de referencia común europeo, esto quiere decir que es por niveles A1 Y A2 (Básico) B1 (Intermedio) B2 (Intermedio avanzado) C1 (Experto) C2 (Nativo) Al principio al hablar con el asesor académico te explicara que nivel consigues al terminar tu curso, consigues tu diploma EVLE, ademas también la posibilidad de presentar un examen de certificación acorde a tu nivel.</p>

                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                    <img src="img/undraw_exams_g-4-ow.svg" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!--PIE DE PÁGINA-->
    <?php
    include_once 'includes/footer.php';
    ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>