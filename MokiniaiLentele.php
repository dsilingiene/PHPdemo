<html>
<body>
<?php
/*#9 - Uždavinys - Tarkime turime masyvą objektų Mokinys. 
Reikia atspausdinti mokinių vardus ir pavardes su jų trimestro vidurkiu į html lentelę 
vidurkio mažėjimo tvarka.
*/

//#9 - Pratimas 2 - Sukurkite masyvą,
// kuriame būtų bent trys Zmogus klasės objektai ir atspausdinkite visus žmones lentelėje.

class Mokinys
{
public $vardas;
public $pavarde;
public $vidurkis;

    function __construct($vard, $pav, $vid) {
         $this ->vardas = $vard;
         $this ->pavarde = $pav;
         $this ->vidurkis = $vid;
    }
}

$mokiniai = [
    new Mokinys ('Jonas', 'Jonaitis', 8),
    new Mokinys ('Ieva', 'Ievaite', 9),
    new Mokinys ('Petras','Petraitis', 7)
];
var_dump ($mokiniai);

?>
    <table>
        <tr>
            <th>Vardas</th><th>Pavarde</th><th>Vidurkis</th>
        </tr>
        <?php foreach ($mokiniai as $mokinys): ?>
            <tr>
                <td><?php echo $mokinys->vardas; ?></td>
                <td><?php echo $mokinys->pavarde; ?></td>
                <td><?php echo $mokinys->vidurkis; ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>