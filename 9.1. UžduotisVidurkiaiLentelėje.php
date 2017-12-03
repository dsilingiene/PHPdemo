<!DOCTYPE html>
<html>
  <head>
    <title>9.1. Užduotis</title>
    </head>
  <body>
    <?php 
    /*Turime mokinių sąrašą su dalykais ir gautais pažymiais už tuos dalykus. <br>
    Suskaičiuokite kuris geriausiai mokosi pagal visų dalykų pažymių vidurkius. <br>
    Dalyko pažymio nustatymui reikės panaudoti funkciją round()<br>
            
    Išveskite mokinių sąrašą į html lentelę taip (pagal stulpelius): <br>
    1) mokinio vardas <br>
    2) visi lietuvių kalbos pažymiai <br>
    3) lietuvių kalbos vidurkis <br>
    4) visi anglų kalbos pažymiai<br>
    5) anglų kalbos vidurkis <br>
    6) visi matematikos pažymiai<br>
    7) matematikos vidurkis <br>
    8) bendras vidurkis;<br><br>";*/
               
$mokiniai = [
['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 7, 10], 'matematika' => [6, 10, 9]]],
['vardas' => 'Rasa', 'pazymiai' => ['lietuviu' => [9, 6, 7, 7], 'anglu' =>[6, 10, 8], 'matematika' => [9, 7, 7]]], 
['vardas' => 'Rokas', 'pazymiai' => ['lietuviu' => [4, 8, 10, 7], 'anglu' =>[6, 7, 8], 'matematika' => [6, 5, 8]]], 
];
    ?>
    <h1>Pažymiai: </h1>
    <?php if ($mokiniai): ?>
      <table border='1'>
        <tr>
            <th rowspan='2'>Mokinio vardas</th><th colspan='7'>Dalykai</th>
        </tr>
        <tr>
            <th>Lietuvių k. pažymiai</th><th>Lietuvių vidurkis</th>
            <th>Anglų k. pažymiai</th><th>Anglų vidurkis</th>
            <th>Matematikos pažymiai</th><th>Matematikos vidurkis</th>
            <th>Bendras vidurkis</th>
        </tr>
        <?php foreach($mokiniai as $vardas => $mokinys): ?>           
            <tr><?php $sumVidurkis=0;?>
                <td><?php echo $mokinys['vardas'] ?></td>
                    <?php foreach ($mokinys['pazymiai'] as $dalykas => $pazymiai): ?>
                         <td><?php echo implode(", ", $mokinys['pazymiai'][$dalykas]) ?></td>  
                         <td><?php echo vidurkis($pazymiai) ?></td> 
                         <?php  $sumVidurkis += vidurkis($pazymiai) ?>                                             
                    <?php endforeach; ?>
                <td><?php echo round($sumVidurkis/count($mokinys['pazymiai'])) ?></td>
            </tr>           
        <?php endforeach; ?>       
      </table>
    <?php else: ?>
      <p>Nėra duomenų</p>
    <?php endif; ?>
    <br><br>
    <?php 
    
    function vidurkis($dalykas){
        $sum = 0;
        foreach ($dalykas as $pazymys){
            $sum += $pazymys;
        }
        $vidurkis = round($sum/count($dalykas));
        return $vidurkis;
    }
    ?>
  </body>
</html>