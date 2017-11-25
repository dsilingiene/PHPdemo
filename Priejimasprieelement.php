<?php

$zmones1 = [
    ['vardas'=>'Jonas'],    //vardas - indeksas, reikšmė - Jonas
    ['vardas'=>'Ona',]   
];

array_push($zmones1, ['vardas'=> 'Petras', 'pavarde' => 'Petraitis']);

foreach ($zmones1 as $z) {
    echo $z['vardas'];
}
    var_dump($z);
var_dump($zmones1);
//echo $zmones1[0][0] jei tik Joną norim atspausdint. 
//var_dump ($zmones1[0]) - parodys iki kur daėjom
?>