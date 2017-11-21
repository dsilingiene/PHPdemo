<?php
/*#7 - 3 Uždavinys - Turime daugiamatį masyvą, kuris aprašo kažką panašaus
 į Excel lentelę arba matricą, t.y. pirmas indeksas žymi eilutę, o antras stulpelį. 
 Eilutės gali turėti skirtingą elementų (stulpelių) skaičių. 
 Suskaičiuokite stulpeliuose esančių skaičių sumas ir išveskite didžiausią
testuokite su masyvu:  $a = [ [1, 3, 4], [2, 5], [2 => 3, 5=> 8], [1, 1, 5 => 1] ];
*/

$a = [
    [1, 3, 4],
    [2, 5], 
    [2 => 3, 5=> 8], //reišmės tik 3 ir 8 stulpely
    [1, 1, 5 => 1] // tik 1
];

$sum = [];

foreach ($a as $eilute) {
        echo "<br>";
        foreach ($eilute as $stulpelis =>$reiksme){
        echo $stulpelis . ":" . $reiksme . ";";
        $sum[$stulpelis] += $reiksme;
    }
}
var_dump ($sum);
?>