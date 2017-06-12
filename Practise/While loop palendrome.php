<?php


$r;
$s=0;
$n=121;
while($n>0){
    $r=$n%10;
    $n=$n/10;
    $s=$s*10+$r;
    };
echo "$s";
?>



<?php
$reverse=0;
$n=456;
 while ($n != 0)
   {
      $reverse = $reverse * 10;
      $reverse = $reverse + $n%10;
      $n   = $n/10;
   };
print "$reverse";
?>
