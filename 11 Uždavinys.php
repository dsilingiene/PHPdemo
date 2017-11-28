<?php
/*Susikurkite klasę Radar, kurioje būtų tokie atributai:

1. $date - Data ir laikas
2. $number - Automobilio numeris
3. $distance - Nuvažiuotas atstumas metrais
4. $time - Sugaištas laikas sekundėmis

Sukurkite masyvą iš 3-4 elementų ir išveskite juos pagal datos
lauką nuo vėliausio iki anksčiausio, t.y. mažėjimo tvarka.
Panaudokime klasę Radar. Reikia susikurti metodą, kuris paskaičiuotų greitį 
kilometrais per valandą.
Sukurkite masyvą iš 3-4 elementų ir išveskite automobilius pagal greitį mažėjimo tvarka. 
Taip pat išveskite ir greičio reikšmes vieno ženklo po kablelio tikslumu.*/

class Radar {
    public $date;
    public $number;
    public $distance;
    public $time;

    function __construct($dat, $num, $dist, $t) {
        $this->date = $dat;
        $this->number = $num;
        $this->distance = $dist;
        $this->time = $t;
    }

    function greitisKmh() {
        $greitisMs = $this->distance/$this->time;
        $greitisKmh = $greitisMs*3.6;
        return round($greitisKmh,1);
    }
}        

$automobiliai = [
    new Radar('2016-01-01 14:30:00', '1' , '5600', '300'), 
    new Radar('2015-11-15 07:35:20', '2', '11000', '690'),
    new Radar('2017-01-21 11:20:10', '3', '15000', '1250'),
    new Radar('2017-01-21 07:10:11', '4', '100500', '4200')
];

usort($automobiliai, function($a,$b) {
    $greitisA = $a ->greitisKmh();
    $greitisB = $b ->greitisKmh();

    return $greitisA == $greitisB? 0 : $greitisA < $greitisB ? 1 : -1;
});
?>

<table border="1">
<tr>
    <th>Automobilio numeris</th>
    <th>Data, laikas</th>
    <th>Greitis Km/h</th>
</tr>
<?php foreach ($automobiliai as $radar): ?>
<tr>
    <td><? echo $radar->number ?></td>
    <td><? echo $radar->date ?></td>
    <td><? echo $radar->greitisKmh () ?></td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>