<?php
$mokiniai = [ 
            [vardas => “Jonas”, pazymiai => [lietuviu => [4, 8, 6, 7],anglu => [6, 7, 8], matematika => [3, 5, 4]]],
            [vardas => “Ona”, pazymiai =>   [lietuviu => [10, 9, 10], anglu => [9, 8, 10],matematika => [10, 10, 9, 9]]]
];
var_dump($mokiniai);
/*#8 - 3 - Turime mokinių sąrašą su dalykais ir gautais pažymiais už tuos dalykus. 
Suskaičiuokite kuris geriausiai mokosi pagal visų dalykų pažymių vidurkius. 
Dalyko pažymio nustatymui reikės panaudoti funkciją round()*/

foreach ($mokiniai as $vardas) {
    foreach ($mokiniai as $pazymiai => $dalykai)
        foreach ($mokiniai as $dalykai => $a);
            for ($i=0; $i<count($a); $i++)
            $vidurkis = array_sum($a)/count($a);
        echo ($vidurkis);
}
?>