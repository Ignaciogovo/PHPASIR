<?php  function unirVuelos($vuelo1,$vuelo2){
        $union=array_merge($vuelo1,$vuelo2);
        echo "Esta es la unión de los dos vuelos";
        print_r($union);
    }
    function diffVuelos($vuelo1,$vuelo2){
        $diff=array_diff($vuelo1,$vuelo2);
        echo "Esta es la diferencia de los dos vuelos";
        print_r($diff);
    }
    function orden($vuelo1,$vuelo2){
        $array1= array(unirVuelos($vuelo1,$vuelo2));
        $orden= sort($array1);
        echo "<br>Este es el orden de los dos vuelos";
        print_r($orden);
    }
    function informacion($vuelo1,$vuelo2){
        $info= array_intersect($vuelo1,$vuelo2);
        echo "Estos son los datos comunes";
        print_r($info);
    }?>