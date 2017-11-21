<html>
<body>
<?php
//#9 - Pratimas 2 - Sukurkite masyvą,
// kuriame būtų bent trys Zmogus klasės objektai ir atspausdinkite visus žmones lentelėje.

class Zmogus
{
public $vardas;
public $pavarde;

    function __construct($v, $p) {
         $this ->vardas = $v;
         $this ->pavarde = $p;
    }
}

$zmones = [
    new Zmogus ('Jonas', 'Jonaitis'),
    new Zmogus ('Ieva', 'Ievaite'),
    new Zmogus ('Petras','Petraitis')
];
?>
    <table>
        <tr>
            <th>Vardas</th><th>Pavarde</th>
        </tr>
        <?php foreach ($zmones as $zmogus): ?>
            <tr>
                <td><?php echo $zmogus->vardas; ?></td>
                <td><?php echo $zmogus->pavarde; ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>

