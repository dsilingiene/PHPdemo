<?php

$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
    ];
    /*Išveskite mokinių sąrašą į html lentelę taip (pagal stulpelius): 
    1) mokinio vardas 
    2) visi lietuvių kalbos pažymiai 
    3) lietuvių kalbos vidurkis 
    4) visi anglų kalbos pažymiai
    5) anglų kalbos vidurkis 
    6) visi matematikos pažymiai
    7) matematikos vidurkis 
    8) bendras vidurkis*/

    <!DOCTYPE html>
    <html>
    <head>
        <title>9 Uždavinys</title>
    </head>
    <body>
    <h1>9 uždavinys</h1>
    <?php
    //#9 - Uždavinys - Tarkime turime masyvą objektų Mokinys. 
    //Reikia atspausdinti mokinių vardus ir pavardes su jų 
    //trimestro vidurkiu į html lentelę vidurkio mažėjimo tvarka.
    class Mokinys {
        public $vardas;
        public $pavarde;
        public $pazymiai;
    
        function __construct($v,  $pav, $p) {
            $this->vardas = $v;
            $this->pavarde =$pav;
            $this->pazymiai = $p;
        }
    
        function trimestras() {
            $trimestras = [];
            foreach ($this->pazymiai as $dalykas => $pazymiai) {
                $vidurkis = $this->vidurkis($pazymiai);
                $trimestras[$dalykas] = $vidurkis;
            }
            return $trimestras;
        }
    
        function vidurkis($pazymiai) {
            $sum = 0;
            foreach ($pazymiai as $pazymys) {
                $sum += $pazymys;
            }
            return $sum / count($pazymiai);
        }
    
        function trimestroVidurkis() {
            $trimestras = $this->trimestras($m);
            return $this->vidurkis($trimestras);
        }
    } 
    
    $mokiniai = [
        new Mokinys('Jonas', 'Jonaitis', ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]), 
        new Mokinys('Ona', 'Onaite',['anglu' => [9, 8, 10], 'lietuviu' => [10, 9, 10], 'matematika' => [10, 10, 9, 9]]),
        new Mokinys('Petras', 'Petraitis',['anglu' => [5, 8, 7], 'lietuviu' => [6, 9, 8], 'matematika' => [10, 10, 9, 9]])
    ];
    
    
    
    for ($i = 0; $i < count($mokiniai) - 1; $i++) {
        
        $x = $mokiniai[$i];
        $index = $i;
    
        for ($j = $i + 1; $j < count($mokiniai); $j++) {
            if ($x->trimestroVidurkis() < $mokiniai[$j]->trimestroVidurkis()) {
                $x = $mokiniai[$j];
                $index = $j;
            }
        }
        $y = $mokiniai[$i];
        $mokiniai[$i] = $mokiniai[$index];
        $mokiniai[$index] = $y;
    }
    
    
    ?>
    
    <table border="1">
        <tr>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Vidurkis</th>
        </tr>
        <?php foreach ($mokiniai as $mokinys): ?>
        <tr>
            <td><?php echo $mokinys->vardas; ?></td>
            <td><?php echo $mokinys->pavarde; ?></td>
            <td><?php echo $mokinys->trimestroVidurkis() ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    </body>
    </html>
    
    