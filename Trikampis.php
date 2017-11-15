<?php
$a = 5;
$b = 6;
$c = 5;
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) 
{
    echo "Trikampis";
}
else {
    echo "Skaičiai negali būti trikampio kraštinės.";
}
?>