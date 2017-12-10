<!DOCTYPE html>
<html>
    <head>
        <title>17 Užduotis. Automobiliai</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>17 Užduotis. Automobiliai</h1>
<div>
    <a href="17 Užduotis 4 mygtukai.php">Pradžia</a>
    <a href="auto.php">Automobiliai</a>
    <a href="year.php">Metai</a>
    <a href="year.php">Mėnesiai</a>
</div>
<?php
echo "<h2>Automobiliai</h2>";
/*Išvedami tik automobilių numeriai, 
automobilio įrašų kiekis ir maksimalus to automobilio greitis;*/

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


    $query = 'SELECT `number`, COUNT(`number`) AS kiekis, ROUND(MAX(`distance` / `time` * 3.6 )) 
              AS maxGreitis 
              FROM `radars`
              GROUP BY `number`';
    if(!($result = $conn->query($query))) {
        die("Error: " . $conn->error);
    }
?>
    <table border 1px>
        <tr>
            <th>Automobilio numeris</th>
            <th>Automobilių kiekis</th>
            <th>Maksimalus greitis</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
            
        <tr>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['kiekis'] ?></td>
            <td><?php echo $row['maxGreitis'] ?></td>
        </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>