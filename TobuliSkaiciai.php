<?php
function ar_tobulas($number)
{
    $sum = 0;
    for($i = 1; $i < $number; $i++)
    {
        if($number % $i == 0)
            $sum += $i;
    }
    return $sum == $number;
}

for($number = 1; $number < 1000; $number++)
{
    if(ar_tobulas($number))

        echo $number.'<br />';
}
?>
