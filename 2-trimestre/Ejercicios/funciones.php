<?php

//FUNCIONES GENERALES
    function mediaArray($array){
        $suma = array_sum($array);
        $total = count($array);
        $resultado=round(($suma/$total), 2);
        return ($resultado);
    }
    function convertirEnhoras($minutos){
        $horas = $minutos/60;
        $hora = floor($horas);
        $resto = $horas-$hora;
        $min = $resto * 60;
        return array($hora,$min);
    }
    function numeroTotal($array){
        $total = 0; //En esta variable se almacena la suma de todos los valores obtenidos en el array
        foreach ($array as $key => $value) {
            if(is_array($value)){ //Si el valor del array es un array se ejecuta el if
                $intermedio = array_sum($value); // la suma del array dentro del valor es igual a intermedio
                echo  "<br>";
            }else{ //Si el valor del array no es un array se ejecuta el else
                $intermedio = $value; //El valor del array es igual a intermedio
            }
            $total = $total + $intermedio; //Al valor total se le suma intermedio cada vez que se recorre un valor del array
        }
        return $total;
    }
    function exportardato($array, $condicion){
        if(isset($condicion)){
            //Con el foreach recorremos el array pedido
            foreach ($array as $key => $value) {
                if($key == $condicion){
                    if(is_array($value)){//Si dentro del array, hay un array se ejecuta este if
                        foreach ($value as $k => $v){
                            array_push($datos,$v); //Metemos los valores del array pedido al array datos
                        }
                    }else{  //Si lo que hay dentro no es un array se ejecuta el else.
                        array_push($datos,$value);
                    }
                }
            }
        }else{
            //Con el foreach recorremos el array pedido
            foreach ($array as $key => $value) {
                if(is_array($value)){//Si dentro del array, hay un array se ejecuta este if
                    foreach ($value as $k => $v){
                        array_push($datos,$v); //Metemos los valores del array pedido al array datos
                    }
                }else{  //Si lo que hay dentro no es un array se ejecuta el else.
                    array_push($datos,$value);
                }
            }
        }
        array_shift($datos); //Eliminamos el primer valor del array datos
        return $datos;

    }
    function exportardatos($array, $condicion){
        //Generamos el array $datos
        $datos = array(0);
        if(isset($condicion)){
            //Con el foreach recorremos el array pedido
            foreach ($array as $key => $value) {
                if($key == $condicion){
                    if(is_array($value)){//Si dentro del array, hay un array se ejecuta este if
                        foreach ($value as $k => $v){
                            array_push($datos,$v); //Metemos los valores del array pedido al array datos
                        }
                    }else{  //Si lo que hay dentro no es un array se ejecuta el else.
                        array_push($datos,$value);
                    }
                }
            }
        }else{
            //Con el foreach recorremos el array pedido
            foreach ($array as $key => $value) {
                if(is_array($value)){//Si dentro del array, hay un array se ejecuta este if
                    foreach ($value as $k => $v){
                        array_push($datos,$v); //Metemos los valores del array pedido al array datos
                    }
                }else{  //Si lo que hay dentro no es un array se ejecuta el else.
                    array_push($datos,$value);
                }
            }
        }
        array_shift($datos); //Eliminamos el primer valor del array datos
        return $datos;

    }
    function numeroConexiones($array){
        $repeticiones = array_flip($array); //Convertirmos los valores del array en key, para más tarde asignarle el número de veces que se ha repetido el key
        foreach ($repeticiones as $key => $value){ // Colocamos el número 0 a cada valor de $repeticiones(Punto de partida);
            $repeticiones[$key] = 0;
        }
        foreach($repeticiones as $key => $value){
            foreach ($array as $llave => $valor){
                if ($key == $valor){
                    $repeticiones[$key] = $repeticiones[$key] + 1;
                }
            }
        }
        print_r($repeticiones);
    }
    // $numero=exportardatos($destinos,null);
    // numeroConexiones($numero);
    // $minutos = mediaArray($numero);
    // numeroTotal($numero);
    // $horas = convertirEnhoras($minutos);
    // print_r($horas);
    

function asignacionarray($numero){
    include("arraybd.php");
    switch ($numero) {
        case 1:
            $array = $Adestinos;
            break;
        case 2:
            $array = $Aduracion;
            break;
        case 3:
            $array = $Apasajeros;
            break;
        case 4:
            $array = $Afabricantes;
            break;
    }
    return $array;
}
//Funciones especificas
    function mostrarVuelo($condicion){
        $orden = array(3,1,4,2); //Orden las consultas
        //Titulo
        echo "$condicion";
        echo "<br>";
        //1ºMedia de pasajeros
        $prueba = asignacionarray($orden[0]);
        $pasajeros = exportardatos($prueba,$condicion);
        $media = mediaArray($pasajeros);
        echo "Media de pasajeros : $media";
        echo "<br>";
        //2º ultimos destinos
        $prueba = asignacionarray($orden[1]);
        $ultiDestinos = exportardatos($prueba, $condicion);
        echo "Ultimos destinos: ";
        foreach ($ultiDestinos as $key => $values){
            echo " $values ";
        }
        echo "<br>";
        //3º Fabricante
        echo " Fabricante: ";
        $prueba = asignacionarray($orden[2]);
        $fabricante = exportardatos($prueba, $condicion);
        echo $fabricante[0];
        echo "<br>";
        //4º minutos totales de vuelo
        $prueba = asignacionarray($orden[3]);
        $minutosTotales = exportardatos($prueba, $condicion);
        $minutosTotales = numeroTotal($minutosTotales);
        echo "Minutos Totales de vuelo: $minutosTotales";
        echo "<br>";
    }
    mostrarVuelo("Vueling-AE12");
?>