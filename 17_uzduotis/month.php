<!DOCTYPE html>
<html>
    <head>
        <title>17 Užduotis. Mėnesiai</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>17 Užduotis. Mėnesiai</h1>
<div>
    <a href="17 Užduotis 4 mygtukai.php">Pradžia</a>
    <a href="auto.php">Automobiliai</a>
    <a href="year.php">Metai</a>
    <a href="month.php">Mėnesiai</a>
</div>
<?php
echo "<h2>Mėnesiai</h2>";

/*Išvedamas atitinkamas periodas, įrašų kiekis tame periode ir maksimalus, minimalus bet vidutinis greitis, pvz:
2015 1 25 150 100 125; 2015 2 20 158 103 128*/

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

$query = 'SELECT YEAR(`date`) AS periodasMetai, 
            MONTH(`date`) AS periodasMenuo,
            COUNT(MONTH(`date`)) AS kiekis,
            ROUND(MAX(`distance` / `time` * 3.6)) AS maxGreitis,
            ROUND(MIN(`distance` / `time` * 3.6)) AS minGreitis, 
            ROUND(AVG(`distance` / `time` * 3.6)) AS vidGreitis
            FROM `radars`
            GROUP BY YEAR(`date`), MONTH(`date`)';
    if(!($result = $conn->query($query))) {
        die("Error: " . $conn->error);
    }
?>
    <table border 1px>
        <tr>
            <th>Metai</th>
            <th>Mėnuo</th>
            <th>Automobilių kiekis</th>
            <th>Maksimalus greitis</th>
            <th>Minimalus greitis</th>
            <th>Vidutinis greitis</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
            
        <tr>
            <td><?php echo $row['periodasMetai'] ?></td>
            <td><?php echo $row['periodasMenuo'] ?></td>
            <td><?php echo $row['kiekis'] ?></td>
            <td><?php echo $row['maxGreitis'] ?></td>
            <td><?php echo $row['minGreitis'] ?></td>
            <td><?php echo $row['vidGreitis'] ?></td>
        </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>
