 <?php
/*$a=5; $b=0; $c=0; $s = 1;
  $s = $a - 1;
    for ($a=0; $a<=5; $a++){
  for ($c=1; $c<=$a; $c++)
  {
    for ($b=1; $b<=$s; $b++)
    echo " &nbsp;";
     for ($b=1; $b<=2*$c-1; $b++)
        echo "*";
    echo ("<br>");
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
        echo "<br>";
    }*/
  



  $a=5; $b; $c; 
  $s = $a - 1;
  for ($c=1; $c<=$a; $c++)
  {
    for ($b=1; $b<=$s; $b++)
    echo " &nbsp;";
     for ($b=1; $b<=2*$c-1; $b++)
        echo "*";
    echo "<br>";
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


<?php
for($i=5;$i>=1;$i--)
{
    for($j=$i;$j<=5;$j++)
    {
        echo $j ;
    }
    echo "<br>";
}
?>