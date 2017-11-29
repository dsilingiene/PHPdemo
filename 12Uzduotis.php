<?php 
session_start();
if (isset($_SESSION['automobiliai'])) {
    $radars = $_SESSION['automobiliai'];    
} else {
    $automobiliai = array(); 
}
if (isset($_POST['date'])) { 
    $naujas = new Automobiliai($_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time']);
    $automobiliai[] = $naujas;
    $_SESSION['automobiliai'] = $automobiliai;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Automobiliai</title>
</head>
<body>
<h1>12 Užduotis</h1>
<?php

/*#12 - Uždavinys - Padarykite formą įvesti automobilius

1) Greičio fiksavimo data ir laikas, pvz: 2016-12-31 23:15:25
2) Automobilio numeris, pvz: ABC 001 
3) Nuvažiuotas atstumas metrais
4) Sugaištas laikas sekundėmis
Tegul programa atsimena (session arba cookie) visus suvestus automobilius ir, 
žemiau įvedimo formos, išveda juos greičių mažėjimo tvarka į html lentelę.*/
?>

<h1>Automobiliai</h1>

    <form method="post" action="12Uzduotis.php">
    <br><label>Greičio fiksavimo data ir laikas: </label><input type="text" name="date" required/></br>
    <br><label>Automobilio numeris, pvz: ABC 001: </label><input type="text" name="number" required/></br>
    <br><label>Nuvažiuotas atstumas metrais: </label><input type="number" name="distance" required/></br>
    <br><label>Sugaištas laikas sekundėmis: </label><input type="number" name="time" required/></br>
    <br> <button type="submit">Įvesti</button></br>
    <br></form>

 <?php

class Automobiliai {
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
        $greitisMs = $_POST['distance']/$_POST['time'];
        $greitisKmh = $greitisMs*3.6;
        return $greitisKmh;
    }
    
}

usort($automobiliai, function($a,$b) {
    $greitisA = $a ->greitisKmh();
    $greitisB = $b ->greitisKmh();

    return $greitisA == $greitisB? 0 : $greitisA < $greitisB ? 1 : -1;
});

?>


 <table border="1">
 <caption><h1>Automobiliai</h1></caption>
 <tr>
     <th>Automobilio numeris</th>
     <th>Data ir laikas</th>
     <th>Nuvažiuotas atstumas</th>
     <th>Sugaištas laikas</th>
     <th>Greitis Km/val</th>
 <tr>
 <?php foreach ($automobiliai as $automobiliai): ?>
 <tr>
     <td><?php echo $automobiliai->date; ?></td>
     <td><?php echo $automobiliai->number; ?></td>
     <td><?php echo $automobiliai->distance; ?></td>
     <td><?php echo $automobiliai->time; ?></td>
     <!--<?php echo greitisKmh(); ?>-->
     
 </tr>
<?php endforeach; ?>
 </tr>
    
</table>
</body>
</html>

