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
    
      

    function __construct($v, $p, $gd) {
        $this->vardas = $v;
        $this->pavarde = $p;

    }

    
}
    class MokiniaiAmzius extends Mokinys
    {
    public $gimimoData; 
        
    function __construct($vardas, $pavarde, $gimimoData) {
    parent::__construct($vardas, $pavarde,$gimimoData);
    $this->gimimoData = $gimimoData;
    }

    
}


$mokiniai = [
    new MokiniaiAmzius('Jonas', 'Jonaitis' , '2017-10-31'), 
    new MokiniaiAmzius('Ona', 'Onaite', '2002-01-10'),
    new MokiniaiAmzius('Petras', 'Petraitis', '2002-08-11'),
    new MokiniaiAmzius('Ieva', 'Ievaite', '2003-05-21')
];


$date = new DateTime(null, new DateTimeZone('Europe/Vilnius'));
echo $date->format('Y-m-d') . "\n";

?>

<table border="1">
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Amzius</th>
    </tr>
    <?php foreach ($mokiniai as $mokinys): ?>
    <tr>
        <td><?php echo $mokinys->vardas; ?></td>
        <td><?php echo $mokinys->pavarde; ?></td>
        <td><?php echo $mokinys->gimimoData; ?></td>   
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
