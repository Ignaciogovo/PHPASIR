<?php
    if (0<($_POST["escritura"]))
{
    $escritura = $_POST["escritura"];
        $fichero=fopen("C:/xampp/htdocs/PHP/Ficheros/pruebaficheros.txt","w");
        fwrite($fichero,$escritura);
    }else
        {
            echo "Por favor escriba un dato si quiere sobre escribir el fichero";
            echo ("<br><br>");
        }


        $fichero=fopen("C:/xampp/htdocs/PHP/Ficheros/pruebaficheros.txt","r") or die("Fallo al abrir el fichero ");
        $pesofichero = filesize("C:/xampp/htdocs/PHP/Ficheros/pruebaficheros.txt");
        if (0<$fichero){
        echo  nl2br(fread($fichero,$pesofichero));
        fclose($fichero);}
        echo ("<br><br>");
        echo "<a href='lecturaoescritura.html'> INICIO </a>";

?>