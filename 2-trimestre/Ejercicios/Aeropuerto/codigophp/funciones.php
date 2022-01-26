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
    function calculoderepeticiones($array){
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
        asort($repeticiones); //Ordenación de menor a mayor
        $repeticiones=array_reverse($repeticiones); // ordenamos de forma inversa el array
        return($repeticiones);
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


    //Funcion mostrarVuelos
    function mostrarVuelo($condicion){
        $orden = array(3,1,4,2); //Orden las consultas
        //Titulo
        echo "<h1>$condicion</h1>";
        echo "<br>";
        //1ºMedia de pasajeros
        $Norden = asignacionarray($orden[0]);
        $pasajeros = exportardatos($Norden,$condicion);
        $media = mediaArray($pasajeros);
        echo "Media de pasajeros : $media";
        echo "<br>";
        //2º ultimos destinos
        $Norden = asignacionarray($orden[1]);
        $ultiDestinos = exportardatos($Norden, $condicion);
        echo "Ultimos destinos: ";
        foreach ($ultiDestinos as $key => $values){
            echo " $values ";
        }
        echo "<br>";
        //3º Fabricante
        echo " Fabricante: ";
        $Norden = asignacionarray($orden[2]);
        $fabricante = exportardatos($Norden, $condicion);
        echo $fabricante[0];
        echo "<br>";
        //4º minutos totales de vuelo
        $Norden = asignacionarray($orden[3]);
        $minutosTotales = exportardatos($Norden, $condicion);
        $minutosTotales = numeroTotal($minutosTotales);
        echo "Minutos Totales de vuelo: $minutosTotales";
        echo "<br>";
    }
    //Estadisticas Aeropuerto

    function EstadisticasAeropuerto(){
        $orden = array(2,3,4,1,1);
        //Titulo
        echo "<h1>Estadísticas Aeropuerto</h1>";
        echo "<br>";
        //Media de horas voladas de todos los vuelos.
        $Norden = asignacionarray($orden[0]);
        $minutos = exportardatos($Norden,NULL);
        $media = mediaArray($minutos);
        $horas = convertirEnhoras($media);
        echo "La media de horas voladas de todos los vuelos es: " . $horas[0] . " horas " . $horas[1] . " minutos ";
        echo "<br>";
        //Número total de pasajeros de todos los vuelos
        $Norden = asignacionarray($orden[1]);
        $pasajeros = exportardatos($Norden,NULL);
        $pasajeros = numeroTotal($pasajeros);
        echo "El total de pasajeros : $pasajeros";
        echo "<br>";
        //Numero total de aviones por fabricante
        $Norden = asignacionarray($orden[2]);
        $fabricantes = exportardatos($Norden,NULL);
        $numeroTotal = calculoderepeticiones($fabricantes);
        echo "fabricantes: <br>";
        foreach ( $numeroTotal as $key => $values){
            echo " $key: $values <br>";
        }
        //El destino con más conexiones
        $Norden = asignacionarray($orden[3]);
        $destinos = exportardatos($Norden,NULL);
        $destinosTotales = calculoderepeticiones($destinos);
        echo "Destino con más conexiones: <br>";
        echo array_key_first($destinosTotales) . ": "  .array_shift($destinosTotales);
        echo "<br>";
        //Destino con menos conexiones
        echo "Destino con menos conexiones: <br>";
        echo array_key_last($destinosTotales) . ": "  . array_pop($destinosTotales);
    }

    //Estaditicas ciudades
    function estadisticasCiudades(){
        $orden = array(1,1,1,1);
        //Titulo
        echo "<h1>Estadísticas Ciudades</h1>";
        echo "<br>";
        //Numero total de ciudades visitadas:
        $Norden = asignacionarray($orden[0]);
        $ciudad = exportardatos($Norden,NULL);
        $ciudadUnica = array_unique($ciudad); //Eliminamos los datos repetidos;
        $numeroCiudades = count($ciudadUnica); //Contamos el número  de valores
        echo "El número total de ciudades visitadas es: $numeroCiudades";
        echo "<br>";
        // El número de veces que se visita una ciudad
        $ciudad= calculoderepeticiones($ciudad);
        echo "Las veces que se ha visitado una ciudad es:";
        echo "<br>";
        foreach ( $ciudad as $key => $values){
            echo " $key: $values <br>";
        }
        //Ciudad más visitada
        echo "Ciudad más visitada: <br>";
        echo array_key_first($ciudad) . ": "  .array_shift($ciudad);
        echo "<br>";
        //Ciudad menos visitada
        echo "Ciudad menos visitada: <br>";
        echo array_key_last($ciudad) . ": "  . array_pop($ciudad);
    }
    function EstadisticaAvion($condicion){
        $orden = array(1,4,2,2,3,3); //Orden las consultas
        //Titulo
        echo "<h1>Estadisticas de: $condicion</h1>";
        echo "<br>";
        //1º destinos
        $Norden = asignacionarray($orden[0]);
        $ultiDestinos = exportardatos($Norden, $condicion);
        echo "Ultimos destinos: ";
        foreach ($ultiDestinos as $key => $values){
            echo " $values ";
        }
        echo "<br>";
        //2º Fabricante
        echo " Fabricante: ";
        $Norden = asignacionarray($orden[1]);
        $fabricante = exportardatos($Norden, $condicion);
        echo $fabricante[0];
        echo "<br>";
        //3º minutos totales de vuelo
        $Norden = asignacionarray($orden[2]);
        $minutosTotales = exportardatos($Norden, $condicion);
        $minutosTotales = numeroTotal($minutosTotales);
        echo "Minutos Totales de vuelo: $minutosTotales";
        echo "<br>";
        //4º Media de de horas voladas
        $Norden = asignacionarray($orden[3]);
        $minutos = exportardatos($Norden,$condicion);
        $media = mediaArray($minutos);
        $horas = convertirEnhoras($media);
        echo "La media de horas voladas es: " . $horas[0] . " horas " . $horas[1] . " minutos ";
        echo "<br>";
        //5º Totales de pasajeros
        $Norden = asignacionarray($orden[4]);
        $pasajerosTotales = exportardatos($Norden, $condicion);
        $pasajerosTotales = numeroTotal($pasajerosTotales);
        echo "Pasajeros Totales: $pasajerosTotales";
        echo "<br>";
        //7º Media de pasajeros
        $Norden = asignacionarray($orden[5]);
        $pasajeros = exportardatos($Norden,$condicion);
        $media = mediaArray($pasajeros);
        echo "Media de pasajeros: $media";
        echo "<br>";
    }

?>