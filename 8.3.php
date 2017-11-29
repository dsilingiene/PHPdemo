<?php

$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
    ];
/*#8 - 3 - Turime mokinių sąrašą su dalykais ir gautais pažymiais už tuos dalykus. 
Suskaičiuokite kuris geriausiai mokosi pagal visų dalykų pažymių vidurkius. 
Dalyko pažymio nustatymui reikės panaudoti funkciją round()*/

foreach($mokiniai as $k => $mokinys) {
    foreach ($mokinys['pazymiai'] as $dal => $pazymys {
          for ($i=0; $i<count($pazymys); $i++){
            
        }
    }
}
echo "<b>Geriausiai mokosi: </b><br>";
$ger = 0;
$vidSuma = vidurkiuSuma($mokiniai);
$n = count($vidSuma);
for ($i=0; $i<$n; $i++){
    if ($ger < $vidSuma[$i]['vidurkis']){
        $ger = $vidSuma[$i]['vidurkis']; 
        $vardas = $vidSuma[$i]['vardas'];
}
}
echo "<br><b>Geriausia vidurkių suma: </b>" .$vardas ." - ".$ger;
  


function vidurkiuSuma($mokiniai){
foreach ($mokiniai as $key => $d){
    $vidSuma = 0;
    foreach ($d['pazymiai'] as $k=> $value){
        $vidSuma += vidurkis ($value);
    }
    $maxVidurkis[] = ['vardas'=>$d['vardas'], 'vidurkis'=>$vidSuma];
    echo $d['vardas'] ." - Vidurkių suma yra: " .$vidSuma ."<br>";
}
return $maxVidurkis;
}
function vidurkis($dalykas){
$sum = 0;
foreach ($dalykas as $ivertinimas){
    $sum += $ivertinimas;
}
$vid = round($sum/count($dalykas));
return $vid;
}
?>