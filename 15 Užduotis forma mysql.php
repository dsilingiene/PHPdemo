<!DOCTYPE html>
<html>
    <head>
        <title>15 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>15 Užduotis</h1>
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

    if ($_POST['id'] > 0) {
        $sql = "UPDATE radars SET `number` = ?, `date` = ?, `distance` = ?, `time` = ? WHERE id = ?"; 
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssddi", $_POST['number'], $_POST['date'], 
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
<form method="post" action=""><br>
<br><label>Greičio fiksavimo data ir laikas: </label><input name="date" type="text" value = "<?=$values['date'] ?>" </br></br>
<br><label>Automobilio numeris, pvz: ABC 001: </label><input type="text" value = "<?=$values['number'] ?>"</br></br>
<br><label>Nuvažiuotas atstumas metrais: </label><input type="text" value = "<?=$values['distance'] ?>"</br/></br>
<br><label>Sugaištas laikas sekundėmis: </label><input type="text" value = "<?=$values['time'] ?>"</br/></br>
<input name="id" type="hidden" value="<?= $values['id'] ?>">
<br> <button type="submit">Įvesti</button></br>
<br></form>
<form action="" method="get"><button>Valyti</button></form></br>

<?php
lentele($conn);


function lentele($conn) {
// išvedame
$sql = 'SELECT *, `id`, `date`, `number`, `distance`, `time` FROM radars ORDER BY `id`, `date` DESC';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?>
    <table border=1px>
        <tr>
            <th>ID</th>
            <th>Data ir laikas</th>
            <th>Numeris</th>
            <th>Atstumas (m)</th>
            <th>Laikas, s</th>
            <th>Duomenų taisymas</th>
            
        </tr>
    
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['distance']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><a href="?id=<?= $row['id'] ?>">Taisyti</a></td>
            </tr>
        <?php endwhile; ?>
    
    </table>

    <?php
} else {
    echo 'nėra duomenų';
}
$conn->close();
}
?>
</body>