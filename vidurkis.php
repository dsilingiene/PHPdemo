<?php
$a = array (5, 6, 10, 15);
$b = array (8, 5, 3, 25);
function vidurkis($array) {
    return array_sum($array) / count($array);
   }
   $x = vidurkis ($a) - vidurkis ($b);
   echo $x;
  ?>