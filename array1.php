<?php
//$car=array("toyota","honda","isuzu");
$car= ["toyota","honda","isuzu"];
//print_r($car);
//echo '<hr>';
echo '<hr>';
$conut_car = count($car);
for($x=0;$x < $conut_car;$x++){
    echo $car[$x].'<br>';
}?>