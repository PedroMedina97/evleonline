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
    <div class="jumbotron mt-5 pb-0 pl-0 pr-0 mb-0">
        <div class="container-fluid mt-5 mb-4 cont">
            <div class="row mx-0 align-items-center justify-content-center text-justify">
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                    <img src="img/scale.jpg" alt="img" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            Nuestros Niveles
                        </div>
                        <div class="card-body">
                            <p class="text-body">
                                Tenemos cursos desde cero nivel A1, estos cursos duran un año y abarcan en un periodo de dos semestres los niveles A1 A2 y principios del nivel B1. Si tu ya consideras tener un nivel mas avanzado a nivel A1 Y A2 podemos aplicarte un examen el cual reflejara el nivel que tienes y adaptarte rapidamente a un grupo que cumpla con tus necesidades. Esto quiere decir que tambien tenemos cursos de nivel B1 Y B2 de duración de un año. Los niveles C1 Y C2 son para avanzados esto quiere decir que podemos prepararte para una certificación, de esta forma podas certificar el idioma en el que estes interesado. Este marco de referencia comun europeo abarca desde nivel primaria, adolescentes y adultos. En el caso de preescolar los cursos siempre son desde cero, esto quiere decir desde nivele A1 a Nivel A2.
                            </p>
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