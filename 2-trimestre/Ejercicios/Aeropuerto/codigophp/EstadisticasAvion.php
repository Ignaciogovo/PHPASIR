<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../Diseño/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;600&display=swap" rel="stylesheet">
        <title>Vuelos</title>
    </head>
    <body class="bg-dark text-light">
        <section>
            <div class="row g-0">
                <div class="col-lg-4"></div>
                <div class="col-lg-8 pt-5">
                    <div class="p-4 px-lg-5 pt-lg-4 pb-lg-3">
                        <!--En dispositivos grandes padding en ambos lados de 5, top de 4 y botton de 3-->
                        <img src="../Diseño/Airport2.png" class="img-fluid" alt="logo" width="12%">
                    </div>
                    <div class="p-4 px-lg-5 pt-lg-4 pb-lg-3">
                        <?php
                            include("funciones.php");
                            $avion = $_POST["avion"];
                            EstadisticaAvion($avion);

                        ?>
                    </div>
                    <div class="row p-4 px-lg-5 pt-lg-4 pb-lg-3 g-0">
                        <div  class="col-lg-4">
                            <a href="../index.html">Volver a página principal</a>
                        </div>
                        <div  class="col-lg-4 ps-0 pe-5">
                            <a href="../EstadisticasAvion.html">Volver a página anterior</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script> -->
    </body>
</html>