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
$sql="INSERT INTO `radars` (id, date, number, distance, time)
VALUES 
('{$_POST['id']}','{$_POST['date']}','{$_POST['number']}','{$_POST['distance']}','{$_POST['time']}')";

$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if ($page != 2) $page = 100;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

$sql = 'SELECT `id`,`date`,`number`, `distance`,`time`,`distance`/`time`*3.6 as `speed` FROM radars ORDER BY `id`, `date` DESC LIMIT ' . ($page + 1) . ' OFFSET ' . $offset;
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    ?>
<form method="post" action="">
    <br><label>Greičio fiksavimo data ir laikas: </label><input type="text" name="date" required/></br>
    <br><label>Automobilio numeris, pvz: ABC 001: </label><input type="text" name="number" required/></br>
    <br><label>Nuvažiuotas atstumas metrais: </label><input type="number" name="distance" required/></br>
    <br><label>Sugaištas laikas sekundėmis: </label><input type="number" id="time" name="time" value="<?= $time ?>" require/></br>
    <br> <button type="submit">Įvesti</button></br>
    <br></form>

    <?php if ($offset > 0): ?>
    <!-- <form>
        <input type="hidden" name="offset" value="<?= $offset >= $page ? $offset - $page : 0 ?>">
        <button>Atgal</button>    
    </form> -->
        <a href="<?= "?offset=".($offset >= $page ? $offset - $page : 0) ?>">Atgal</a>
    <?php endif; ?>

    <?php if ($result->num_rows == $page + 1): ?>
    <!-- <form>
        <input type="hidden" name="offset" value="<?= $offset + $page ?>">
        <button>Pirmyn</button>    
    </form> -->
        <a href="<?= "?offset=".($offset + $page) ?>">Pirmyn</a>
    <?php endif; ?>

    <table border=1>
        <tr>
            <th>Id</th>
            <th>Data ir laikas</th>
            <th>Automobilio numeris</th>
            <th>Atstumas, m</th>
            <th>Laikas, s</th>
            <th>Greitis, Km/h</th>
        </tr>
    
    <?php
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    for ($i = 0; $i < $page; $i++) {
        if (!($row = $result->fetch_assoc())) break;
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo ($row['number']); ?></td>
            <td><?php echo ($row['distance']); ?></td>
            <td><?php echo ($row['time']); ?></td>
            <td><?php echo round($row['speed']); ?></td>
        </tr>
        <?php
    }
    echo '</table>';
} else {
    echo 'Nėra duomenų';
}
$conn->close();
?>
</body>