<!DOCTYPE html>
<html>
    <head>
        <title>17 Užduotis. Metai</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>17 Užduotis. Metai</h1>
<div>
    <a href="17 Užduotis 4 mygtukai.php">Pradžia</a>
    <a href="auto.php">Automobiliai</a>
    <a href="year.php">Metai</a>
    <a href="month.php">Mėnesiai</a>
</div>
<?php
echo "<h2>Metai</h2>";
/*išvedamos tik atitinkamas periodas, įrašų kiekis tame periode ir maksimalus, 
minimalus bet vidutinis greitis, pvz: 2015 25 150 100 125; 2016 20 167 109 135 */

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
            COUNT(YEAR(`date`)) AS kiekis,
            ROUND(MAX(`distance` / `time` * 3.6)) AS maxGreitis,
            ROUND(MIN(`distance` / `time` * 3.6)) AS minGreitis, 
            ROUND(AVG(`distance` / `time` * 3.6)) AS vidGreitis
            FROM `radars`
            GROUP BY YEAR(`date`)';

    if(!($result = $conn->query($query))) {
        die("Error: " . $conn->error);
    }
?>
    <table border 1px>
        <tr>
            <th>Metai</th>
            <th>Automobilių kiekis</th>
            <th>Maksimalus greitis</th>
            <th>Minimalus greitis</th>
            <th>Vidutinis greitis</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
            
        <tr>
            <td><?php echo $row['periodasMetai'] ?></td>
            <td><?php echo $row['kiekis'] ?></td>
            <td><?php echo $row['maxGreitis'] ?></td>
            <td><?php echo $row['minGreitis'] ?></td>
            <td><?php echo $row['vidGreitis'] ?></td>
        </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>