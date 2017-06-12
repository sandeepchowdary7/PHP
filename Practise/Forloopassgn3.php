<?php
 //example-4
 for($i=0; $i<=6; $i++){
     for($j=0; $j<=$i; $j++){
        echo "*";
             } 
         echo "<br>";
      for($k=0; $k<=$i; $k++){
         echo "+";
 }
     echo "<br>";
     
    }
echo "<br>";
?>



<?php
 //example-4
$total=10;
 for($i=1; $i<=$total; $i++){
     for ($j=$total-$i; $j>=$i; $j--){
         echo "*";
     }
     for ($k=1; $k<=$i; $k++){
         echo "*";
     } 
    echo "<br>";
    
 }
 echo "<br>";
?>


<?php
 //example-4
 $a=5; 
$b;
$c;
  $s = $a - 1;
  for ($c=1; $c<=$a; $c++)
  {
    for ($b=1; $b<=$s; $b++){
    echo " &nbsp;";
    }
      for ($b=1; $b<=2*$c-1; $b++){
        echo "*";
      } echo "<br>";
      $s=$s-1;
  }
  $s = 1;
  for ($c=1; $c<=$a - 1; $c++)
  {
    for ($b=1; $b<=$s; $b++){
     echo " &nbsp;";
     }
    $s++;
    for ($b=1 ; $b<=2*($a-$c)-1; $b++) {
     echo "*";
  }
     echo "<br>";
  }
?>



