
<?php
function mediaFabricantes(){
    include("arraybd.php");
    include_once("funciones.php");
    $Aviones = exportardatos($Afabricantes,NULL); //Extraemos los datos de la tabla fabricantes
    $fabricantes = calculoderepeticiones($Aviones);
    $nAviones = count($Aviones); //Es el número de aviones que hay.
    foreach($fabricantes as $k => $v){
        $porcentaje = $v/$nAviones;
        $porcentaje = $porcentaje*100;
        echo "El fabricante $k tiene un porcentaje  de: $porcentaje % <br>";
    }
}
mediaFabricantes();
echo "<hr>";

function mediaminutos($condicion){
    include("arraybd.php");
    include_once("funciones.php");
    $Aviones = exportardatos($Aduracion,$condicion); //Extraemos los datos de la tabla duración.
    $minutos=mediaArray($Aviones);
    echo "La media de los minutos es: $minutos"; 
}
mediaminutos("Vueling-AE12");
function mediacombustible($condicion){
    include("arraybd.php");
    include_once("funciones.php");
    $Aviones = exportardatos($Acombustible,$condicion); //Extraemos los datos de la tabla Acombustible.
    $combustibles=mediaArray($Aviones);
    echo "La media de combustible es: $combustibles"; 
}
mediacombustible("Vueling-AE12");
?>
