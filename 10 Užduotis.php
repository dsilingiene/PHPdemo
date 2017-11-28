<!DOCTYPE html>
<html>
<head>
    <title>10 Užduotis</title>
</head>
<body>
<h1>10 Užduotis</h1>
<?php

/*Papildykite Mokinys klasę tekstiniu atributu gimimoData, 
t.y. jo reikšmė bus pvz ‘2001-10-31’. Sukurkite Mokinys klasei metodą, 
kuris grąžintų sveiką skaičių kiek mokiniui yra metų, pvz. 17 (16,5 → 16). 
Sukurkite kelių (3-4) mokinių masyvą ir atspausdinkite 
html lentelėje tik tuos mokinius kurie turi 18 metų ir daugiau.*/

class Mokinys {
    public $vardas;
    public $pavarde;
    public $gimimoData;
    

    function __construct($v, $p, $gimimoData) {
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->gimimoData = $gimimoData;
    }
   
    function amzius() {
        $gd = new DateTime($this -> gimimoData);
        $now = new DateTime();
        $diff = $gd ->diff($now);
        return $diff ->y; }
    }

    

$mokiniai = [
    new Mokinys('Jonas', 'Jonaitis' , '1999-10-31'), 
    new Mokinys('Ona', 'Onaite', '1998-01-10'),
    new Mokinys('Petras', 'Petraitis', '1997-08-11'),
    new Mokinys('Ieva', 'Ievaite', '1999-05-21')
];

?>

<table border="1">
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Gimimo data</th>
        <th>Amzius</th>
    </tr>
    <?php foreach ($mokiniai as $mokinys): ?>
    <tr>
        <td><? echo $mokinys->vardas ?></td>
        <td><? echo $mokinys->pavarde ?></td>
        <td><? echo $mokinys->gimimoData ?></td>
        <td><? echo $mokinys->amzius() ?></td>   
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
