<?php
 $a=array(4,3,1,2);
 for ($i=0; $i<count($a); $i++){
    for ($j=0; $j<count($a); $j++) {
      if ($a[$j] > $a[$i]){
        $x = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $x;
      }
    }
 }

 for($i=0;$i<count($a);$i++){
   echo $a[$i].",";
 }
?>
