<?php
$a = array (5, 6, 10, 15);
$b = array (8, 5, 3, 25);
function vidurkisA($a) {
    return array_sum($a) / count($a);
   }
function vidurkisB($b) {
    return array_sum($b) / count($b);
   }
   $x = vidurkisA($a) - vidurkisB($b);
   echo $x;
?>