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
?>