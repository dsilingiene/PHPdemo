<?php 
echo "<br>Galimos poros vyras - moteris:</br><br>";
//#8 - 1 - Turime žmonių masyvą, kurio kiekvienas elementas yra masyvas su žmogaus vardu ir lytimi.
//Atspausdinkite visas galimas skirtingas poras vyras - moteris.

$a = [ 
    [’vardas’ => ‘Jonas’, ‘lytis’ => ‘V’], 
    [‘vardas’ => ‘Ona’, ‘lytis’ => ‘M’], 
    [‘vardas’ => ‘Petras’, ‘lytis’ => ‘V’], 
    [‘vardas’ => ‘Marytė’, ‘lytis’ => ‘M’], 
    [‘vardas’ => ‘Eglė’, ‘lytis’ => ‘M’]
    ]; 
    var_dump($a);
    
    if ($a) {
           foreach ($a as 'vardas') {
               foreach ($a as 'lytis') {
                echo $a[$i]['vardas'] . " - " . $a[$j]['vardas'];
               }
           }
        }
?>


