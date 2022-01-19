<?php
include("arraybd.php");
    function mediaArray($array){
        $suma = array_sum($array);
        $total = count($array);
        return ($suma/$total);
    }
    function convertirEnhoras($minutos){
        $horas = $minutos/60;
        $hora = floor($horas);
        $resto = $horas-$hora;
        $min = $resto * 60;
        return array($hora,$min);
    }
    function numeroTotal($array){
        $total = 0;
        foreach ($array as $key => $value) {
            if(is_array($value)){
                $prueba = array_sum($value);
                print_r($value);
                echo  "<br>";
            }else{
                $prueba = $value;
                echo "$value <br>";
            }
            $total = $total + $prueba;
        }
        echo "La prueba es $total ";
    }
    numeroTotal($duracion);

?>