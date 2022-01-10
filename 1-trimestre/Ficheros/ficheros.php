<?PHP 
    echo readfile('pruebaficheros.txt');
    echo ("<br><br>");

    //APERTURA Y LECTURA DE UN FICHERO
    $fichero=fopen("pruebaficheros.txt","r") or die("Fallo al abrir el fichero ");
    $pesofichero = filesize("pruebaficheros.txt");
    echo  nl2br(fread($fichero,$pesofichero));
    fclose($fichero);
    echo ("<br><br>");



    //Escritura
    $fichero=fopen("pruebaficheros.txt","w") or die("Fallo al abrir el fichero ");
    $ficheroescritura= "prefieroredbul";
    fwrite($fichero,$ficheroescritura);
?>