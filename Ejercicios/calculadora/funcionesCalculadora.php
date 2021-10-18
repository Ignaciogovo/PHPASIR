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
    function squareRoot($num)
    {
        echo "El resultado es " . sqrt($num) . "</br>";
    }
    function exponentialExpression($num1, $num2)
    {
        echo "El resultado es " . pow($num1, $num2) . "</br>";
    }
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
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
            case "√":
                echo "<h2>Por favor, en el caso de raiz cuadrada use solo la primera casilla</h2>";
                break;
            case "^2":
                echo "<h2>Por favor, en el caso de elevar al cuadrado use solo la primera casilla</h2>";
                break;
            case "^3":
                echo "<h2>Por favor, en el caso de elevar al cubo use solo la primera casilla</h2>";
                break;
            case "^n":
                exponentialExpression($num1, $num2);
                break;
        }
    } elseif (is_numeric($num1) or is_numeric($num2)) {
        if (is_numeric($num1)) {
            switch ($opera) {
                case "√":
                    squareRoot($num1);
                    break;
                case "^2":
                    exponentialExpression($num1, 2);
                    break;
                case "^3":
                    exponentialExpression($num1, 3);
                    break;
            }
        } elseif ($num2) {
            switch ($opera) {
                case "√":
                    echo "<h2>Por favor, en el caso de raiz cuadrada use solo la primera casilla</h2>";
                    break;
                case "^2":
                    echo "<h2>Por favor, en el caso de elevar al cuadrado use solo la primera casilla</h2>";
                    break;
                case "^3":
                    echo "<h2>Por favor, en el caso de elevar al cubo use solo la primera casilla</h2>";
                    break;
            }
        }
    } else {
        echo "<p>Calculadora no operativa<p>";
    }
    if (is_numeric($num3)) {
        echo "<br><br><br>Serie de Fibonacci";
        $va1 = 0;
        $va2 = 1;
        while ($va1 < $num3) {
            echo " <br> $va1 <br> $va2 <br>";
            $va1 = $va1 + $va2;
            $va2 = $va1 + $va2;
        };
    };
    echo '<a href="calculadora.html">Volver a operar</a>';

    ?>
</body>

</html>