<?php
    $numeros = array(8,3,7,1);
    $suspensos = array("Migue","Kerry","a");
    $coches = array("Ferrari","Seat", "BMV", "porsche", "lambo", "coche1");
    $prueba = array_pad($coches,9,9);
    
        echo $suspensos[1];
        echo "En orden:<br>";
        for ($i=0; $i<=8; $i++){
            echo $prueba[$i]. "<br>";
        }
        echo "<--Número aleatorio<br>";
        for ($i=0; $i<=9; $i++){
            $aleatorio = rand(0,8);
            echo $prueba[$aleatorio] . "  El número usado es:" . 1+$aleatorio . "<br>";
        }



        // ARRAYS ASOCIATIVOS
    $alumno = array("Nombre" => "Migue",
                    "Apellidos" => "Kerry",
                    "Edad" =>23);
    echo $alumno["Apellidos"];
        
?>