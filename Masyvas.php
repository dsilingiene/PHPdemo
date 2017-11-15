<?php
$a = array(4, 3, 1, 2);
ksort($a);
 
$numlength = count($a);
for($i = 0; $i < $numlength; $i++) {
    echo $a[$i]; echo "<br>";
}
?>