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

if ($zmones) {
    for ($i=0; $i<count($zmones)-2; $i++) {
        for ($j=i+1; $j<count($zmones)-1;$j++) {
           // for ($k=$j+1; $k<count($zmones);$k++) {
                if ($zmones[$i]['lytis'] !== $zmones[$j]['lytis'] && 
                    $zmones[$j]['lytis'] !== $zmones[$k]['lytis']) {
                        echo $zmones[$i]['vardas'] . "($i)-" . $zmones[$j]['vardas'] . "($j)-" .  $zmones[$k]['vardas'] . "($k)" . "<br/ >"; {
                    }    
                } 
           // }

        }
    }    
}
?>