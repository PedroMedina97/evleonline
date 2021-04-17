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
            <div class="container-fluid mt-5">
                <div class="jumbotron bg-secondary">
                        <div class="row">
                            <div class="col-6">
                                <p class="h4 text-white">Seleccione su incubadora más cercana</p>
                            <div class="btn-group mr-2 mb-2">
                                <button class="btn btn-danger dropdown-toggle" id="dp-categoria6" data-toggle="dropdown">
                                Sección
                                </button>
                        <div class="dropdown-menu" aria-labelledby="dp-categorias6">
                            <h6 class="dropdown-header">Lista de Secciones</h6>
                            <a href="#" class="dropdown-item">Norte</a>
                            <a href="#" class="dropdown-item">Centro</a>
                            <a href="#" class="dropdown-item">Sur</a>     
                        </div>
                        </div>

                        <div class="btn-group mr-2 mb-2">
                            <button class="btn btn-danger dropdown-toggle" id="dp-categoria6" data-toggle="dropdown">
                            Campus
                            </button>
                    <div class="dropdown-menu" aria-labelledby="dp-categorias6">
                        <h6 class="dropdown-header">Lista de Campus</h6>
                        <a href="#" class="dropdown-item">Villahermosa</a>
                        <a href="#" class="dropdown-item">Lomas Verdes</a>
                        <a href="#" class="dropdown-item">Veracruz</a>     
                    </div>
                    </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                <div class="card-header">
                                    Coordinador(a)
                                </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="img/profile.jpg" style="border-radius:100%;" alt="" width="100%">
                                            </div>
                                            <div class="col-6">
                                            <p><strong>Nombre:</strong></p>
                                            <p><em>Edgar Allan Poe</em></p>
                                            <p><strong>Puesto:</strong></p>
                                            <p><em>Docente de Tiempo Completo</em></p>
                                            <p><strong>Dirección:</strong></p>
                                            <p><em>Av. Enrique Segoviano Col.Vicente Guerrero No.23</em></p>
                                            <p><strong>Número:</strong></p>
                                            <p><em>9931234564 Ext.5</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>           
                </div>
                
            </div>
        </div>
    
        <?php
            include_once 'includes/footer.php';
         ?>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </body>
    </html>


    <!--PIE DE PÁGINA-->
    <?php
        include_once 'includes/footer.php';
   ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>