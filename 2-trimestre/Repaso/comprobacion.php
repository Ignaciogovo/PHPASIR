<?php
// if(isset($_POST)){
//     echo "esta vacío ";
// }
// else{
//     if(isset($_POST["nombre"]) && isset($_POST["apellidos"])){
//         echo "funciona ";
//         echo $_POST["nombre"];
//         }else{
//         echo "introduzca los datos requeridos ";
//     }
// }
$variable = $_POST;
print_r($variable);
if (!empty($variable["nombre"])) 
	{
    echo " formulario recibido <br> ";
    // $variable2 = 'valor';
    if (isset($variable2)) 
    {
        echo "Variable definida!!!";
    }else
        {
        echo "Variable NO definida!!!";
        }
	}else
		{
		echo " Variable NO definida ";
		}
 
echo "<a href='formulario.html'>pagina principal</a>";
?>