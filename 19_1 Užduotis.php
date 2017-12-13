<!DOCTYPE html>
<html>
    <head>
        <title>19.1 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>19.1 Užduotis</h1>
<?php
//Parašykite užklausą, kuri išvestų vairuotojus, kurie vairavo daugiau nei vieną automobilį

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

$query = 'SELECT a.`driverId`, `name`, COUNT(`number`) as `skaicius`
            FROM `radars` a
            INNER JOIN drivers v ON a.`driverId` = v.`driverId` 
            GROUP BY `driverId`
            HAVING `skaicius` > 1';

if(!($result = $conn->query($query))) {
die("Error: " . $conn->error);
}
?>

<?php if($result->num_rows > 0): ?>
<table border = 1 px>
    <tr>
        <th>Vairuotojo ID</th>
        <th>Vairuotojo vardas</th>
        <th>Automobilių skaičius</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['driverId'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['skaicius'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php else: echo "Nėra duomenų" ?>
<?php endif; ?>
<?php $conn->close(); ?>