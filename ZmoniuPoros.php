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
if ($a){
for ($i=0; $i<count($a) - 2; $i++) {
    for ($j = $i + 1; $j<count($a) - 1; $j++) 
        for ($k = $j + 1; $k<count($a); $k++) {
            if (!($a[$i]['lytis'] == $a[$j]['lytis'] &&
                ($a[$j]['lytis'] == $a[$k]['lytis'])));
                echo $a[$i]['vardas'] ."($i) - ". $a[$i]['vardas'] . "($j) - " . $a[$k]['vardas'] . "($k) - ";
            }
        }
    }
    
    else {echo "Nėra duomenų";
}
?>
