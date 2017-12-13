<!DOCTYPE html>
<html>
    <head>
        <title>19.3 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>19.3 Užduotis</h1>
<?php

/*Parašykite užklausą, kuri išvestų vairuotojus ir jų pasiektą 
didžiausią greitį to greičio mažėjimo tvarka*/

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

$query = 'SELECT a.`driverId`, `name`, ROUND(MAX(`distance`/`time` * 3.6)) AS `maxGreitis` 
              FROM `radars` a
              INNER JOIN `drivers` v ON a.`driverId` = v.`driverId`
              GROUP BY a.`driverId`, `name`
              ORDER BY `maxGreitis` DESC';

if(!($result = $conn->query($query))) {
die("Error: " . $conn->error);
}
?>

<?php if($result->num_rows > 0): ?>
<table border = 1 px>
    <tr>
        <th>Vairuotojo ID</th>
        <th>Vairuotojo vardas</th>
        <th>Maksimalus greitis</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['driverId'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['maxGreitis'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php else: echo "Nėra duomenų" ?>
<?php endif; ?>
<?php $conn->close(); ?>