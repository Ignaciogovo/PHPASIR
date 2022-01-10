
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
?>