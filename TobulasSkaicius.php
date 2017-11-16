<?php
function tobulas_skaicius($skaicius)  {
for ($n = 2; $n <= sqrt($skaicius); $n++)
    {
    if (!($skaicius % $n))
    {
    $d = $d + $n;

                if ($n <> $skaicius / $n)

                    $d = $d + $skaicius / $n;
            }
        }
        return ++$d == $skaicius;

    }
    for ($n = 1; $n < 1000; $n++)
    
            if (tobulas_skaicius($n))
    
                echo $n . '<br />';        
        ?>

    