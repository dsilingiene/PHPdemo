<!DOCTYPE html>
<html>
    <head>
        <title>17 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>17 Užduotis</h1>
<?php

/*Sukurkite programą kad galima būtų įvesti naujus įrašus apie automobilių greitį, 
taisyti jau suvestą informaciją, o taip pat trinti įrašus.
Pataisykite automobilių programėlę pridėdami naujus mygtukus:
1) Mygtukas “Automobiliai”, kurį paspaudus būtų išvedami tik automobilių numeriai, 
automobilio įrašų kiekis ir maksimalus to automobilio greitis;
2) Mygtukas “Metai” - paspaudus būtų išvedamos tik atitinkamas 
periodas, įrašų kiekis tame periode ir maksimalus, minimalus bet vidutinis greitis, pvz: 
2015 25 150 100 125
2016 20 167 109 135 
3) Mygtukas “Menuo” - paspaudus būtų išvedamos tik atitinkamas 
periodas, įrašų kiekis tame periode ir maksimalus, minimalus bet vidutinis greitis, pvz:
2015 1 25 150 100 125
2015 2 20 158 103 128
Padaryti rezultato puslapiavimą*/

error_reporting ('E_STRICT');
$servername = "localhost";
$username = "Auto";
$password = "LabaiSlaptas123";
$dbname = "Auto";
$datatable = "radars"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Nepavyko prisijungti: " . $conn->connect_error);
} 

$values = [];
?>

<?php 

    if (array_key_exists('id', $_GET) && $_GET['id'] > 0) {
        $sql = 'SELECT * FROM radars WHERE `id` = ' . $_GET["id"];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $values = $result->fetch_assoc();
        }
    }
    if (isset($_GET['delete'])) {
        $sql = "DELETE FROM radars WHERE id = ". intval($_GET['delete']);
        $conn->query($sql);
    }

    if ($_POST['id'] > 0) {
        $sql = "UPDATE radars SET `date` = ?, `number` = ?, `distance` = ?, `time` = ? WHERE id = ?"; 
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssddi", $_POST['date'], $_POST['number'], 
            $_POST['distance'], $_POST['time'], $_POST['id']);
        $stmt->execute();

        header("Location: " . $_SERVER['PHP_SELF']); /* Redirect browser */
        exit();

    } else if ($_POST['id'] === '') {
        $insert = "INSERT INTO radars(`date`, `number`, `distance`, `time`) VALUES(?, ?, ?, ?)"; 
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("ssdd", $_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time']);
        $stmt->execute();

        header("Location: " . $_SERVER['PHP_SELF']); /* Redirect browser */
        exit();
    }


?>

<form action="" method="post"><br>
    <br><label>Greičio fiksavimo data ir laikas: </label>
    <br><input name="date" type="text" value="<?= $values['date'] ?>"><br>
    <br><label>Automobilio numeris, pvz: ABC 001: </label>
    <br><input name="number" type="text" value="<?= $values['number'] ?>"><br>
    <br><label>Nuvažiuotas atstumas metrais: </label>
    <br><input name="distance" type="text" value="<?= $values['distance'] ?>"><br>
    <br><label>Sugaištas laikas sekundėmis: </label>
    <br><input name="time" type="text" value="<?= $values['time'] ?>">
    
    <input name="id" type="hidden" value="<?= $values['id'] ?>"><br>

    <br><button>Įvesti</button><br>
    
</form>
<br><form action="" method="get"><button>Valyti</button></form><br>

<?php
lentele($conn);


function lentele($conn) {
    // išvedame
    $sql = 'SELECT *, `distance`/`time`*3.6 as `speed` FROM radars ORDER BY `id` ASC';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <table border = 1px>
            <tr>
                <th>ID</th>
                <th>Automobilio numeris</th>
                <th>Data</th>
                <th>Atstumas, m</th>
                <th>Laikas, s</th>
                <th>Greitis km/h</th>
                <th>Duomenų koregavimas</th>
                <th>Duomenų pašalinimas</th>
            </tr>
        
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['distance']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo round($row['speed']); ?></td>
                    <td><a href="?id=<?= $row['id'] ?>">Taisyti</a></td>
                    <td><a href="?delete=<?= $row['id'] ?>">Trinti</a></td>
                </tr>
            <?php endwhile; ?>
        
        </table>

        <?php
    } else {
        echo 'Nėra duomenų';
    }
    $conn->close();
}
?>
</body>
</html>