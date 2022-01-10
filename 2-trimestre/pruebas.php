<?php 
$variable = array(0.1,0.2,0.3,0.04,0.5,0.6,0.7,0.8,0.09,0.01);
foreach ($variable as $key => $value) {
    for ($i=0; $i < count($variable); $i++) { 
        $value = $value * rand(0,10);
        $variable[$key]= $value;
        echo "<br>";
        echo " $key =>> $value";
    }
        echo "<br>";
        print_r($variable);
}


?>