<!DOCTYPE html>
<html>
<head>
    <title>12 Užduotis</title>
</head>
<body>
<h1>12 Užduotis</h1>
<?php

/*#12 - Uždavinys - Padarykite formą įvesti automobilius

1) Greičio fiksavimo data ir laikas, pvz: 2016-12-31 23:15:25
2) Automobilio numeris, pvz: ABC 001 
3) Nuvažiuotas atstumas metrais
4) Sugaištas laikas sekundėmis
Tegul programa atsimena (session arba cookie) visus suvestus automobilius ir, 
žemiau įvedimo formos, išveda juos greičių mažėjimo tvarka į html lentelę.*/
?>

<strong>Automobiliai</strong>
<form action="12 Užduotis.php" method"post">
    <br><label>Greičio fiksavimo data ir laikas: </label><input type="text" name="data"/><br/>
    <br><label>Automobilio numeris, pvz: ABC 001: </label><input type="text" name="numeris"/><br/>
    <br><label>Nuvažiuotas atstumas metrais: </label><input type="text" name="atstumas"/><br/>
    <br><label>Sugaištas laikas sekundėmis: </label><input type="text" name="laikas"/><br/>
    <br><input type="submit" name="Submit" value="Įvesti" /><br>
</form>


<br>
<table border="1">
    <tr>
        <th>Automobilio numeris</th>
        <th>Data ir laikas</th>
        <th>Nuvažiuotas atstumas</th>
        <th>Sugaištas laikas</th>
        <th>Greitis M/s</th>
    <tr>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>

    </tr>
       
</table>
</body>
</html>