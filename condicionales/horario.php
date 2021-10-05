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
        $dia= date("N");
        $hora="ASO";
        switch ($dia) {
            case 1:
                echo "Lunes";
            break;
            case 2:
                echo "Martes";
            break;
            case 3:
                echo "Miercoles";
            break;
            case 4:
                echo "Jueves";
            break;
            case 5:
                echo "viernes";
            break;
            default:
                echo "Es Fin de semana</br>Puedes descansar";
            break;                                    
        }
        echo "<table>
                <tr><td>$hora</td></tr>
                <tr><td>$hora</td></tr>
                <tr><td>$hora</td></tr>
                <tr><td>$hora</td></tr>
        </table>"
     ?>
</body>
</html>