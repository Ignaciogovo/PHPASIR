<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    function suma($num1, $num2)
    {
        $res = $num1 + $num2;
        print "El resultado es " . $res . "</br>";
    }
    function multiplicar($num1, $num2)
    {
        $res = $num1 * $num2;
        print "El resultado es " . $res . "</br>";
    }
    function resta($num1, $num2)
    {
        $res = $num1 - $num2;
        print "El resultado es " . $res . "</br>";
    }
    function division($num1, $num2)
    {
        $res = $num1 / $num2;
        print "El resultado es " . $res . "</br>";
    }
    function resto($num1, $num2)
    {
        $res = $num1 % $num2;
        print "El resultado es " . $res . "</br>";
    }
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $opera = $_POST["operacion"];
    if (is_numeric($num1) and is_numeric($num2)) {
        switch ($opera) {
            case "+":
                suma($num1, $num2);
                break;
            case "-":
                resta($num1, $num2);
                break;
            case "*":
                multiplicar($num1, $num2);
                break;
            case "/":
                division($num1, $num2);
                break;
            case "%":
                resto($num1, $num2);
                break;
        };
    } else {
        echo "<H1>NO VALIDO<H1>";
    }
    echo '<a href="calculadora.html">Volver a operar</a>';
    ?>
</body>

</html>