<?php 
    function mediaArray($array){
        $suma = array_sum($array);
        $total = count($array);
        return ($suma/$total);
    }
    function convertirEnhoras($minutos){
        $horas = $minutos/60;
    }
?>