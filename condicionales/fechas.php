<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    echo date("Y");
    ?></title>
</head>
<body>
    <h2>Ejercicio tratamiento de FECHAS</h2>
    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    <?php 
    echo "Vamos a trabajar con fechas <br>";
    echo "Hoy es:" .date("l") ."<br>";
    $hora = date("H");
    if($hora<"8"){
        echo "Estoy en durmiendo"."<br>";
    }elseif($hora>"8" && $hora<"15"){
        echo "Estoy en clase";
    }
    else{
        echo "Estoy en mi casa";
    };
    echo "<br>";
    do{
        $segundo=date("s");
        echo "$segundo <br>";
        sleep(1);
    }while($segundo<"40");
        ?>
        <h3><a href="paginaAsir.html">Volver a la pagina principal</a></h3>
</body>
</html>