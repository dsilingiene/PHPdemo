<?php

$a = [
    [1, 3, 4],
    [2, 5], 
    [2 => 3, 5=> 8], //reišmės tik 3 ir 8 stulpely
    [1, 1, 5 => 1] // tik pirmame
];

$sum = [];

foreach ($a as $eilute) {
        echo "<br>";
        foreach ($eilute as $stulpelis =>$reiksme){
            if (isset($sum[$stulpelis])){
                $sum[$stulpelis] += $reiksme;
            } else $sum[stulpelis] = $reiksme;
               
    }
}
var_dump ($sum);
?>