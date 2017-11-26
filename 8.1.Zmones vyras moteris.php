<?php

//#8 - 1 - Turime žmonių masyvą, 
//kurio kiekvienas elementas yra masyvas su žmogaus vardu ir lytimi.
//Atspausdinkite visas galimas skirtingas poras vyras - moteris.

$zmones = [ 
    ['vardas'=> 'Jonas', 'Lytis'=> 'V'],
    ['vardas'=> 'Ona', 'Lytis'=> 'M'],
    ['vardas'=> 'Petras', 'Lytis'=> 'V'],
    ['vardas'=> 'Maryte', 'Lytis'=> 'M'],
    ['vardas'=> 'Egle', 'Lytis'=> 'M'],
];

var_dump ($zmones);

"<b>Galimos poros vyras - moteris:</br><br>";


for ($i=0; $i<count($zmones) - 1; $i++){
    for ($j=$i + 1; $j<count($zmones); $j++){
        if ($zmones[$i]['lytis'] != $zmones[$j]['lytis']) {
            echo $zmones[$i]['vardas']. "-". $zmones[$j]['vardas'] . "<br />";  
        }
    }
}    
?>