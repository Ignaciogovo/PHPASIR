<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMETABLE</title>
</head>

<body>
    <H1>My TIMETABLE</H1>
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
            echo "Monday";
            $hora1 = "Implementation of web applications";
            $hora2 = "Implementation of web applications";
            $hora3 = "Implementation of web applications";
            $hora4 = "network services";
            $hora5 = "network services";
            $hora6 = "network services";
            break;
        case 2:
            echo "Tuesday";
            $hora1 = "Operating systems management";
            $hora2 = "Operating systems management";
            $hora3 = "Operating systems management";
            $hora4 = "security";
            $hora5 = "business";
            $hora6 = "business";
            break;
        case 3:
            echo "Wednesday";
            $hora1 = "Operating systems management";
            $hora2 = "Operating systems management";
            $hora3 = "Operating systems management";
            $hora4 = "network services";
            $hora5 = "network services";
            $hora6 = "network services";
            break;
        case 4:
            echo "Thursday";
            $hora1 = "database";
            $hora2 = "database";
            $hora3 = "database";
            $hora4 = "Security";
            $hora5 = "English";
            $hora6 = "English";
            break;
        case 5:
            echo "Friday";
            $hora1 = "English";
            $hora2 = "security";
            $hora3 = "security";
            $hora4 = "Implementation of web applications";
            $hora5 = "business";
            $hora6 = "business";
            break;
        default:
            echo "It's weekend</br>You can rest ";
            
            break;
    };
    echo "</br>" . "Ii's $hora:$minuto </br>" ;
    if ($dia < 6) {
        switch ($hora) {
            case 8:
                if ($minuto > 15) {
                    echo "You have $hora1";
                } else {
                    echo "You don't have classes now";
                };
                break;
            case 9:
                if ($minuto > 15) {
                    echo "You have $hora2";
                } else {
                    echo "You have $hora1";
                };
                break;
            case 10:
                if ($minuto > 15) {
                    echo "You have $hora3";
                } else {
                    echo "You have $hora2";
                };
                break;
            case 11:
                if ($minuto > 15 and $minuto < 45) {
                    echo "BREAK";
                } elseif ($minuto > 45) {
                    echo "You have $hora4";
                } else {
                    echo "You have $hora3";
                };
                break;
            case 12:
                if ($minuto < 45) {
                    echo "You have $hora4";
                } else {
                    echo "You have $hora5";
                };
                break;
            case 13:
                if ($minuto < 45) {
                    echo "You have $hora5";
                } else {
                    echo "You have $hora6";
                };
                break;
            case 14:
                if ($minuto < 45) {
                    echo "You have $hora6";
                } else {

                    echo "You don't have classes now ";
                };
                break;
            default:
                echo "You don't have classes now";
                break;
        };
    };
    if ($dia < 6) {
        echo "<table>
                <tr><td>$hora1</td></tr>
                <tr><td>$hora2</td></tr>
                <tr><td>$hora3</td></tr>
                <tr><td>BREAK</td></tr>
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