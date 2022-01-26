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
    <div class="jumbotron bg-dark mt-5 mb-0 fadeIn fast" id="sec1">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col">
                    <div class="card card-mover mt-5">
                        <div class="card-body">
                            <h3 class="text">Sobre Nosotros</h3>
                            <p>Nuestros objetivos son muy claros, queremos brindarte la mejor experiencia en el aprendizaje de idiomas en línea, profesores en vivo que puedan realmente saber cuales son las dificultades a las que te enfrentas al aprender el idioma. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                    <img src="img/2.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                    <!--Selector-->
                    <div class="list-group mt-3" id="lista" role="tablist">
                        <a href="#elemento1" class="list-group-item list-group-item-action active" data-toggle="list" role="tab" aria-controls="elemento1">Misión</a>
                        <a href="#elemento2" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="elemento2">Visión</a>
                        <a href="#elemento3" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="elemento3">Valores</a>
                    </div>
                    <!-- CARDS -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="elemento1" role="tabpanel1" aria-labelledby="elemento1">
                            <div class="card">
                                <div class="card-body">
                                    <p>EVLE: Enseñanza Virtual de Lenguas Extranjeras tiene la misión de llevar el aprendizaje de idiomas de calidad a todos los hogares. Ser un centro líder y competitivo en la enseñanza de idiomas modernos, comprometido con la excelencia académica y la calidad en el servicio.</p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show" id="elemento2" role="tabpanel1" aria-labelledby="elemento2">
                            <div class="card">
                                <div class="card-body">
                                    <p>Ser la mejor escuela de idiomas en línea en el mercado con la mejora continua de un sistema nuevo de enseñanza, proporcionándole a nuestros estudiantes los conocimientos lingüísticos, fonéticos y culturales, para una mejor formación personal, académica y profesional, potenciando así la consolidación de la enseñanza de los idiomas en un mundo globalizado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="elemento3" role="tabpanel1" aria-labelledby="elemento3">
                            <div class="card">
                                <div class="card-body">
                                    <ul>
                                        <li class="mb-1">
                                            Compromiso de parte de nuestros docentes para impartir una educación de calidad.
                                        </li>
                                        <li class="mb-1">
                                            Respeto a toda la familia EVLE, esto incluye personal docente, alumnado y personal administrativo.
                                        </li>
                                        <li class="mb-1">
                                            Admiración por el esfuerzo de nuestro personal y alumnos para lograr sus metas.
                                        </li>
                                        <li class="mb-1">
                                            Constancia en todo los cursos, porque sabemos que la constancia en una de las bases del éxito.
                                        </li>
                                        <li class="mb-1">
                                            Compromiso con todos los miembros de nuestra comunidad.
                                        </li>
                                        <li class="mb-1">
                                            Amor y pasión por lo que hacemos.
                                        </li>
                                        <li class="mb-1">
                                            Transparencia, no queremos esconder ningún tipo de información respecto a los servicios que te ofrecemos, estamos siempre dispuestos a brindarte la información que requieras.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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