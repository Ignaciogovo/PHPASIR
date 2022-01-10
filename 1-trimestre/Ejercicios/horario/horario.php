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
    include 'caseshorario.php';
    echo "</br>" . "Son las $hora:$minuto </br>" ;
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