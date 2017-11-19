<?php
$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
$poros = '';
for ($i=0; $i<count($a); $i++){
    for ($j=0; $j<count($a); $j++)
        if ($a[$i]!==$a[$j])
            $poros .= $a[$i]. "-". $a[$j] . "<br />"; else continue;
        
    
}
echo "<h2>Skirtingos poros, kai ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra tokios pat:</h2>$poros";
?>