<?php
$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
for ($i=0; $i<count($a) - 1; $i++){
    for ($j=$i + 1; $j<count($a); $j++){
            echo $a[$i]. "-". $a[$j] . "<br />";  
        }
    }
?>