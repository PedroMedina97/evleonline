<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Incubadora de Negocios UVM</title>
</head>

<body>
    <?php
   require_once 'includes/barra.php';
    
    ?>
    <!--Carrusel-->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/pexels-thisisengineering-3862370.jpg" width="100%" height="100%"
                    alt="First slide">
                <div class="carousel-caption d-block">
                    <h1 class="text-white">Digitaliza tu Negocio</h1>
                    <button type="button" class="btn btn-success">Saber Más</button>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/pexels-ekaterina-bolovtsova-4049960.jpg" width="100%" height="100%"
                    alt="Second slide">
                <div class="carousel-caption d-block">
                    <h3 class="text-white">Asesórate con Profesionales</h3>
                    <button type="button" class="btn btn-primary">Saber Más</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/pexels-vlada-karpovich-4050315.jpg" width="100%" height="100%"
                    alt="Third slide">
                <div class="carousel-caption d-block">
                    <h3 class="text-white">Conéctate Con Otras Empresas</h1>
                        <button type="button" class="btn btn-warning">Saber Más</button>
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
    <!--CONTENEDORES-->

    <!--CONTENEDOR 1-->
    <div class="back1 jumbotron mb-0" id="sec1">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-mover">
                        <div class="card-body">
                            <h2 class="text text-uvm">Incubación de Empresas</h1>
                                <p class="text-dark">Arranca tu empresa a partir de tu idea, producto o servicio
                                    potenciandolo
                                    con la red de incubadoras UVM</p>
                                <form action="#sec2">
                                    <button class="btn btn-lg btn-block btn-uvm text-white mb-3">Saber Más</button>
                                </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-4 col-sm-12  col-xs-12">
                    <img src="img/incubadora.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
    <!--CONTENEDOR 2-->
    <div class="back2 jumbotron mb-0" id="sec1">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-lg-6 col-md-4 col-sm-12  col-xs-12">
                    <img src="img/asesorias.png" alt="" width="100%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-mover">
                        <div class="card-body">
                            <h2 class="text-dark">Asesorías Especializadas</h1>
                                <p class="text-dark">Te apoyamos en el diseño de tu modelo, plan de negocios,
                                    aceleramiento y
                                    asesoría especializada.</p>

                                <form action="#sec2">
                                    <button class="btn btn-lg btn-block btn-dark text-white mb-3">Saber Más</button>
                                </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--CONTENEDOR 3-->
    <div class="back3 jumbotron mb-0" id="sec1">
        <div class="card">
            <div class="card-body">
                <h2 class="text text-uvm mb-3">Convocatorias</h1>
                    <div class="container-fluid">

                        <div class="row align-items-center justify-content-center text-justify">

                            <div style="background-color: black; border-radius: 15px;"
                                class="col-xs-12 col-sm-12 col-md-3 col-lg-4 col-xl-4 mr-1">
                                <div class="card border-dark card-mover">
                                    <div class="card-body">
                                        <h3 class="card-title">Privadas</h3>
                                        <p class="card-text">Desafío Lince</p>
                                        <a href="#" class="btn btn-uvm text-light">Ir al Post</a>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: black; border-radius: 15px;"
                                class="col-xs-12 col-sm-12 col-md-3 col-lg-4 col-xl-4">
                                <div class="card border-dark card-mover">
                                    <div class="card-body">
                                        <h3 class="card-title">Asociadas</h3>
                                        <p class="card-text">U-Hack</p>
                                        <a href="#" class="btn btn-uvm text-light">Ir al Post</a>
                                    </div>
                                </div>
                            </div>

                            <div style="padding-left: 0px; padding-right: 0px;"
                                class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <img src="img/paint.png" alt="" width="100%">
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