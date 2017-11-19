<?php

/*#7 - 1/2 Uždaviniai - Turime masyvą $a = [‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’]. 
1. Atspausdinkite visas galimas skirtingas poras laikant, kad pvz poros 
‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra tokios pat. 
2. Ta pati sąlyga tik pvz poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra laikomos skirtingomis.*/

$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
$poros = '';
for ($i=0; $i<count($a); $i++){
    for ($j=0; $j<count($a); $j++){
            $poros .= $a[$i]. "-". $a[$j] . "<br />";  
        }
    
}
echo "<h1>Poros:</h1>$poros";
?>