<?php 
    $opcion = $_POST["uno"];
    if ($opcion == "si"){
        echo "<a href='escritura.html'> escritura </a>";
        $variable =fopen("escritura.html","r");
    }else{
        $fichero=fopen("C:/xampp/htdocs/PHP/Ficheros/pruebaficheros.txt","r") or die("Fallo al abrir el fichero ");
        $pesofichero = filesize("C:/xampp/htdocs/PHP/Ficheros/pruebaficheros.txt");
        echo  nl2br(fread($fichero,$pesofichero));
        fclose($fichero);
        echo ("<br><br>");
    }
    echo ("<br><br>");
    echo "<a href='lecturaoescritura.html'> INICIO </a>";
?>