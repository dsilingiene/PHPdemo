<!DOCTYPE html>
<html>
    <head>
        <title>18 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>18 Užduotis</h1>

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

    <br><br>
    <?php
        $sql="SELECT driverId, name FROM drivers";
        $result = $conn->query($sql);
        if($result->num_rows > 0): ?>
            <select name="select"> 
            <option value ="0">Rinktis vairuotoją</option>        
            <?php while($rs = $result->fetch_assoc()): ?>
                <option value="<?php if (isset($_GET['id'])): echo $rs['driverId'];  endif;?>" 
                <?php if (isset($_GET['id']) && $rs['driverId'] == $values['driverId']) { echo "selected";}?>
                ><?php echo $rs['name'] ?></option>
            <?php endwhile ?>
            </select>
        <?php endif ?><br>
    <input type="hidden" name="id" value="<?php if (isset($_GET['id'])): echo $values['id']; endif;  ?>"><br>
    <br><button>Įvesti</button><br>
</form>
<br><form action="" method="get"><button>Valyti</button></form><br>
