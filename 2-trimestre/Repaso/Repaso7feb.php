<?php
    echo date("Y") . "<br>"; // muestra 2022
    echo date("d M Y") . "<br>"; // muestra 07 feb 2022
    echo date("d/m/Y") . "<br>"; // muestra 07/02/2022
    echo date("d/m/y h:i:s") . "<br>"; // muestra 07/02/22 09:00:27


    //Zonas UTC
    echo "estoy en la zona: " . date_default_timezone_get() . "<br>"; // muestra: estoy en la zona: Europe/Berlin
    echo "fecha: " . strftime("%A, %d, de %B del %Y - %H:%M:%S") . "<br>";// muestra: fecha: Monday, 07, de February del 2022 - 09:00:27
    echo"<br>";
    date_default_timezone_set("Europe/London");
    echo "estoy en la zona: " . date_default_timezone_get() . "<br>"; //muestra: estoy en la zona: Europe/London
    echo "fecha: " . strftime("%A, %d, de %B del %Y - %H:%M:%S") . "<br>"; //muestra fecha: Monday, 07, de February del 2022 - 08:00:27
    echo"<br>";



    //Crear fecha
    $fechita1 = mktime(9,0,0,2,7,2022);
    $fechazo =date("d/m/y h:i:s");
    // echo $fechita;
    echo date("d/m/y",$fechita1);
    echo"<br>";
    /*

    1 dia = 86400 segundos

    */
    $fechita2 = mktime(12,40,0,3,9,2022);
    $diff = $fechita2-$fechita1;
    $minutos = $diff/60;
    $horas = $minutos/60;
    $dias = $horas/24;
    echo "La diferencia entre las dos fechas es de: " . round($minutos, 2) . "en minutos, de" . round($horas,2). "en horas y de dias: " . round($dias,2);
    echo"<br>";
    echo"<br>";
    echo"<br>";
 
 
 ///Repaso ficheros.
 echo "<h2>Repaso ficheros</h2>";
 if (file_exists("../../ficheros/datos.txt") == true) { //Comprobación de si existe un fichero.
     echo "El fichero existe";
 } else {
     echo "No existe el fichero";
 }
 echo"<br>";
 $fichero = fopen("../../ficheros/prueba.txt","a"); //Creamos un fichero si no esta creado
 fclose($fichero);
 $fichero1=fopen("../../ficheros/prueba.txt","a+");
 fwrite($fichero1,"Hola buenas tardes $fechazo \r\n</br>");
 fwrite($fichero1,"paco macaco  \r\n");
 fflush($fichero1); //Medida de seguridad para escribir los datos almacenados en la cache
 fclose($fichero1);
 echo readfile("../../ficheros/prueba.txt");
 echo"<br>";
 $fichero1=fopen("../../ficheros/prueba.txt","a+");
 echo fread($fichero1,200);
 fclose($fichero1);
 ?>