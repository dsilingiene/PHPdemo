<?php
/*Duota /demo/19/automobilis?id=140

Pasitikrinimui pasinaudokite https://regex101.com/
1) rasti tekstą nuo pradžios iki ? (/demo/19/automobilis)   
2) raskite tekstą nuo ? iki galo (id=140):  [^\?]+$
3) raskite tekstą iki antro / (/demo)
4) raskite tekstą tarp paskutinio / ir ? (automobilis)*/


echo "<h1>13 Užduotis. Reguliariosios išraiškos:</h1>";
preg_match_all('/^[^\?]*/',
    "</b>/demo/19/automobilis?id=140</div>",
    $vienas, PREG_PATTERN_ORDER);
echo $vienas[0][0] . " | " . $vienas[0][1] . "\n";
echo $vienas[1][0]  . " | " .$vienas[1][1] . "\n";

preg_match_all('/[^\?]+$/',
"</b>/demo/19/automobilis?id=140</div>",
$du, PREG_PATTERN_ORDER);
echo $du[0][0] ." | " . $du[0][1] . "\n";
echo $du[1][0] . " | " .$du[1][1] . "\n";

preg_match_all('/^\/.\w*/',
"/demo/19/automobilis?id=140</div>",
$trys, PREG_PATTERN_ORDER);
echo $trys[0][0] . " | " . $trys[0][1] . "\n";
echo $trys[1][0]  . " | " .$trys[1][1] . "\n";

preg_match_all('/(?<=\/)\w*(?=\?)/',
"/demo/19/automobilis?id=140</div>",
$trys, PREG_PATTERN_ORDER);
echo $trys[0][0] . " | " . $trys[0][1] . "\n";
echo $trys[1][0]  . " | " .$trys[1][1] . "\n";

?>




