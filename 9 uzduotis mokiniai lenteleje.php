<!DOCTYPE html>
<html>
<head>
    <tittle>9 Užduotis</tittle>
</head>
<body>
<?php
$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
    ];
    //pazymiai gali buti ir kita tvarka, todel su foreach bus problemu
?>

function vidurkis($pazymiai) {
    $sum = 0;
    foreach ($pazymiai as $pazymys) {
        sum += $pazymys;
        }
    return $sum / count($pazymiai);
}

function vidurkiai($mokinys) {
    $trimestras = []
    foreach ($mokinys['pazymiai'] as $dalykas =>$pazymiai) {
        $vidurkis = vidurkis($pazymiai);
        $trimestras[$dalykas] = $vidurkis;
    }
   return $trimestras;
}
foreach ($mokiniai as $i = $m) { 
    $mokiniai[$i]['trimestras'] = svidurkiai($m); 
}
<table border = "1">
    <tr>
        <th>Vardas</th>
        <th>Pažymiai</th>
    </tr>
    <?php foreach ($mokiniai as $mokinys): ?>
    <tr>
        <td><?php echo $mokinys['vardas']; ?></td>
        <td>
        <?php foreach ($mokinys['pazymiai']as $dalykas => $pazymiai):?>
            <div>
                <?php echo $dalykas . ':';?>
                <?php foreach ($pazymiai as $pazymys) echo $pazymys . ' '; ?>
            
        <?php endforeach;
        </td>
    </tr>
    </table>
    <?php endforeach;
</body>
</html>

//su ta pacia funkcija ir trimestro vidurki galima
//zr foto
//funkcija implode galima naudot sujungia per tarpa masyvo elementa.
//PHP cookbook knyga
             

