<?php
if(isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){
$infov1=$_POST["infovuelo1"];
    $codigo1=$infov1["codigo1"];
    $origen1=$infov1["origen1"];
    $destino1=$infov1["destino1"];
    $precio1=$infov1["precio1"];
    $fecha1=$infov1["fecha1"];

    $infov2=$_POST["infovuelo2"];
    $codigo2=$infov2["codigo2"];
    $origen2=$infov2["origen2"];
    $destino2=$infov2["destino2"];
    $precio2=$infov2["precio2"];
    $fecha2=$infov2["fecha2"];

    $herramieta=$_POST["herramienta"];
        //$vuelo1=array($_POST["codigo1"],$_POST["origen1"],$_POST["destino1"],$_POST["precio1"],$_POST["fecha1"]);
        //$vuelo2=array($_POST["codigo2"],$_POST["origen2"],$_POST["destino2"],$_POST["precio2"],$_POST["fecha2"]);
    /*for($i=0;$i <5;$i++){
        print_r($vuelo1[$i]);
        echo "<br>";
        for($a=0;$a <5;$a++){
            if($i>=1){
                break;
            }else{
            print_r($vuelo2[$a]);
            echo "<br>";
        }
        }
    }*/
    function unirVuelos($vuelo1,$vuelo2){
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
    }
    switch($herramieta){
        case 'union':
            unirVuelos($infov1,$infov2);
            break;
        case 'diferencia':
            diffVuelos($infov1,$infov2);
            break;
        case 'ordena':
            orden($infov1,$infov2);
            break;
        case 'informacion':
            informacion($infov1,$infov2);
            break;
}
    echo "<a href='gestion.html'>Volver al formulario</a>";
}else{
    echo "No funciona";
}
