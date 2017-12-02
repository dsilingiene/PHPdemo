<?php
/*Sukurkite su phpMyAdmin bent 15 automobilių greičių įrašų. 
Parašykite programą, kuri išvestų įrašus puslapiais po 10. 
Padarykite, kad būtų du mygtukai “Pirmyn” ir/arba “Atgal” vaikščiojimui per puslapius.*/

error_reporting(0);
$servername = "localhost";
$username = "Auto";
$password = "LabaiSlaptas123";
$dbname = "Auto";
$datatable = "radars"; // MySQL table name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, date, number, distance, time FROM radars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "  Data ir laikas: " . $row["date"]. "  Automobilio numeris: " . $row["number"]. "  Atstumas, m: " . $row["distance"]. "  Laikas, s: " . $row["time"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>