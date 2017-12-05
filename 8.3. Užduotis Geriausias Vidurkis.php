<?php

Echo "<h4>8.3 Užduotis</h4>";
/*Turime mokinių sąrašą su dalykais ir gautais pažymiais už tuos dalykus.
Suskaičiuokite kuris geriausiai mokosi pagal visų dalykų pažymių vidurkius.
Dalyko pažymio nustatymui reikės panaudoti funkciją round().*/

$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]],
    ['vardas' => 'Rima', 'pazymiai' => ['lietuviu' => [8, 9, 10], 'anglu' => [9, 8, 6], 'matematika' => [10, 9, 9, 9]]],
    ['vardas' => 'Rokas', 'pazymiai' => ['lietuviu' => [7, 6, 5], 'anglu' => [9, 8, 8], 'matematika' => [10, 6, 9, 9]]]
    ];

$maxVidurkis = 0;
    function vidurkis($pazymiai) {
        $sum = 0;
        foreach ($pazymiai as $pazymys) {
            $sum += $pazymys;
        }
        return $sum / count($pazymiai);
    }
    function vidurkiai($mokinys) {
        $trimestras = [];
        foreach ($mokinys['pazymiai'] as $dalykas => $pazymiai) {
            $vidurkis = round(vidurkis($pazymiai));
            $trimestras[$dalykas] = $vidurkis;
        }
        return $trimestras;
        
    }
    foreach ($mokiniai as $i => $mok) {
        $mokiniai[$i]['trimestras'] = vidurkiai($mok);
        $mokiniai[$i]['vidurkis'] = round(vidurkis($mokiniai[$i]['trimestras']));
    }
    
    for($i = 0; $i < count($mokiniai); $i++) {
        if ($maxVidurkis < $mokiniai[$i]['vidurkis']) {
            $maxVidurkis = $mokiniai[$i]['vidurkis'];
            $name = $mokiniai[$i]['vardas']; 
        }
    }
    echo 'Geriausias pažymių vidurkis: ' . $name .','  . ' Vidurkis: ' . $maxVidurkis;
    
?>
</body>
</html>