<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
function lentele($conn) {
    // išvedame
    $sql = 'SELECT *, distance/time*3.6 as speed, v.name as name, a.driverId as driverId
            FROM radars a
            LEFT JOIN drivers v ON a.driverId = v.driverId
            WHERE v.driverId is NULL OR a.driverId = v.driverId
            ORDER BY id';
    
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
                <th>Vairuotojo Id</th>
                <th>Vairuotojo vardas</th>
                <th>Duomenų koregavimas</th>
            </tr>
        
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['distance']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo round($row['speed']); ?></td>
                    <td><?php echo $row['driverId']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="?id=<?= $row['id'] ?>">Taisyti</a></td>
                </tr>
            <?php endwhile; ?>
        
        </table>

        <?php
    } else {
        echo 'Nėra duomenų';
    }
}
?>
</body>
</html>