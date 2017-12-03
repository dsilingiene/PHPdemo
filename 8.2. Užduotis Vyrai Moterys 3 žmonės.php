<?php
/*#8 - 1 - Turime žmonių masyvą, kurio kiekvienas elementas 
yra masyvas su žmogaus vardu ir lytimi. sudarome 3 asmenų grupes 
taip kad nebūtų tų pačių lyčių, t.y. kad nebūtų tik vyrai arba tik moterys*/

    $zmones = [ 
        ['vardas' => 'Jonas', 'lytis' => 'V'],
        ['vardas' => 'Ona', 'lytis' => 'M'], 
        ['vardas' => 'Petras', 'lytis' => 'V'], 
        ['vardas' => 'Marytė', 'lytis' => 'M'], 
        ['vardas' => 'Eglė', 'lytis' => 'M']
        ]; 
    echo "<h4>Skirtingos poros 3 žmonės skirtingų lyčių:</h4>";   
    for ($i=0; $i < count($zmones); $i++) { 
        for ($j=$i+1; $j < count($zmones); $j++) { 
            for ($k=$j+1; $k<count($zmones);$k++) {
                if ($zmones[$i]['lytis'] != $zmones[$j]['lytis'] || 
                $zmones[$j]['lytis'] != $zmones[$k]['lytis'])
                echo $zmones[$i]['vardas'] . ' - ' . $zmones[$j]['vardas']. ' - ' . $zmones[$k]['vardas']. '<br>';
            }
        }
    }
    ?>