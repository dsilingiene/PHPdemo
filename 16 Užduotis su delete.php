<!DOCTYPE html>
<html>
    <head>
        <title>16 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>16 Užduotis</h1>
<?php

/*Sukurkite programą, kad galima būtų įvesti naujus radarų įrašus ir taisyti 
jau suvestą informaciją. Taip pat kad galima būtų peržiūrėti jau turimus įrašus.*/

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
    <br><input name="date" type="datetime" value="<?= $values['date'] ?>"><br>
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