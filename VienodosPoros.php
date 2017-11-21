<?php
$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
for ($i=0; $i<count($a); $i++){
    for ($j = 0; $j<count($a); $j++){
        if ($i != $j)
            echo $a[$i]. "-". $a[$j] . "<br />";  
        }
    }
?>