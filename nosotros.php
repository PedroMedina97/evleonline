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
    <div class="jumbotron mt-5 mb-0" id="sec1">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col">
                    <div class="card card-mover mt-5">
                        <div class="card-body">
                            <h3 class="text">Sobre Nosotros</h3>
                            <p>En 2007 surge la primera incubadora en la Universidad del Valle de México, en el Campus Tlalpan. Actualmente la Red de Incubadoras tiene 23 incubadoras de empresas reconocidas por la Secretaría de Economía, a través del Padrón de Desarrolladoras de Capacidades Empresariales (PADCE). *La Red de Incubadoras por segunda ocasión esta dentro del Ranking Mundial de Incubadoras y Aceleradoras UBI Global, con una mención espcial por impulsar el emprendimiento en las mujeres. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center text-justify">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                    <img src="img/logo_cuadrado.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                    <!--Selector-->
                    <div class="list-group mt-3" id="lista" role="tablist">
                        <a href="#elemento1" class="list-group-item list-group-item-action active" data-toggle="list"
                            role="tab" aria-controls="elemento1">Misión</a>
                        <a href="#elemento2" class="list-group-item list-group-item-action" data-toggle="list"
                            role="tab" aria-controls="elemento2">Visión</a>
                        <a href="#elemento3" class="list-group-item list-group-item-action" data-toggle="list"
                            role="tab" aria-controls="elemento3">Objetivos</a>
                    </div>
                    <!-- CARDS -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="elemento1" role="tabpanel1"
                            aria-labelledby="elemento1">
                            <div class="card">
                                <div class="card-body">
                                    <p>Contribuir al desarrollo económico y social de México, potenciando la actitud
                                        emprendedora, la oportuna obtención de recursos financieros y la adecuada
                                        operación de nuevas empresas, promovidas por emprendedores nacionales e
                                        internacionales, a través del asesoramiento eficiente de la red de incubadoras
                                        de la UVM, en el proceso de incubación, ejecución, promoción, operación y
                                        seguimiento de MIPYMES.</p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show" id="elemento2" role="tabpanel1" aria-labelledby="elemento2">
                            <div class="card">
                                <div class="card-body">
                                    <p>Contribuir a la generación de empleos y disminuir la marginación económica y
                                        social de México, con la operación eficaz, técnica y financieramente, del
                                        programa nacional de incubación de la red de incubadoras de la UVM.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="elemento3" role="tabpanel1" aria-labelledby="elemento3">
                            <div class="card">
                                <div class="card-body">
                                    <p>El objetivo de la Incubadora de Empresas es servir a toda la comunidad UVM: alumnos, padres de familia, egresados, profesores y comunidad externa promoviendo el espíritu emprendedor para la creación o aceleración de empresas rentables.</p>
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