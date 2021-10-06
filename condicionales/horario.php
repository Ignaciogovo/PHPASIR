<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>

<body>
    <H1>Horario de tu dia</H1>
    <?php
    $dia = date("N");
    $hora1;
    $hora2;
    $hora3;
    $hora4;
    $hora5;
    $hora6;
    $hora = date("G");
    $minuto = date("i");
    switch ($dia) {
        case 1:
            echo "Lunes";
            $hora1 = "AW";
            $hora2 = "AW";
            $hora3 = "AW";
            $hora4 = "Servicios en Red";
            $hora5 = "Servicios en Red";
            $hora6 = "Servicios en Red";
            break;
        case 2:
            echo "Martes";
            $hora1 = "ASO";
            $hora2 = "ASO";
            $hora3 = "ASO";
            $hora4 = "Seguridad";
            $hora5 = "Empresa";
            $hora6 = "Empresa";
            break;
        case 3:
            echo "Miercoles";
            $hora1 = "ASO";
            $hora2 = "ASO";
            $hora3 = "ASO";
            $hora4 = "Servicios en Red";
            $hora5 = "Servicios en Red";
            $hora6 = "Servicios en Red";
            break;
        case 4:
            echo "Jueves";
            $hora1 = "BBDD";
            $hora2 = "BBDD";
            $hora3 = "BBDD";
            $hora4 = "Seguridad";
            $hora5 = "English";
            $hora6 = "English";
            break;
        case 5:
            echo "viernes";
            $hora1 = "English";
            $hora2 = "Seguridad";
            $hora3 = "Seguridad";
            $hora4 = "AW";
            $hora5 = "Empresa";
            $hora6 = "Empresa";
            break;
        default:
            echo "Es Fin de semana</br>Puedes descansar";
            
            break;
    };
    echo "</br>";
    if ($dia < 6) {
        switch ($hora) {
            case 8:
                if ($minuto > 15) {
                    echo "Tienes $hora1";
                } else {
                    echo "No tienes horario de clase";
                };
                break;
            case 9:
                if ($minuto > 15) {
                    echo "Tienes $hora2";
                } else {
                    echo "Tienes $hora1";
                };
                break;
            case 10:
                if ($minuto > 15) {
                    echo "Tienes $hora3";
                } else {
                    echo "Tienes $hora2";
                };
                break;
            case 11:
                if ($minuto > 15 and $minuto < 45) {
                    echo "RECREO";
                } elseif ($minuto > 45) {
                    echo "Tienes $hora4";
                } else {
                    echo "Tienes $hora3";
                };
                break;
            case 12:
                if ($minuto < 45) {
                    echo "Tienes $hora4";
                } else {
                    echo "Tienes $hora5";
                };
                break;
            case 13:
                if ($minuto < 45) {
                    echo "Tienes $hora5";
                } else {
                    echo "Tienes $hora6";
                };
                break;
            case 14:
                if ($minuto < 45) {
                    echo "Tienes $hora6";
                } else {

                    echo "No tienes horario de clase";
                };
                break;
            default:
                echo "No tienes horario de clase";
                break;
        };
    };
    if ($dia < 6) {
        echo "<table>
                <tr><td>$hora1</td></tr>
                <tr><td>$hora2</td></tr>
                <tr><td>$hora3</td></tr>
                <tr><td>Recreo</td></tr>
                <tr><td>$hora4</td></tr>
                <tr><td>$hora5</td></tr>
                <tr><td>$hora6</td></tr>
        </table> 
        <style>
        table,
        td {border: 1px solid black;
        width:auto;
        }";
    };
    ?>
</body>

</html>