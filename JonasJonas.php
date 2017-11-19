<?php
$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
$poros = '';
for ($i=0; $i<count($a); $i++){
    for ($j=0; $j<count($a); $j++){
            $poros .= $a[$i]. "-". $a[$j] . "<br />";  
        }
    
}
echo "<h2>Poros, kai ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra laikomos skirtingomis:</h2>$poros";
?>