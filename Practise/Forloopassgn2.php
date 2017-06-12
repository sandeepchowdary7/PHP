<?php
 //example-3
 for($i=0; $i<=5; $i++){
     for($j=0; $j<=5; $j++){
    echo "*";
    echo "+";
     
     }
      echo "<br>";
     echo "<br>";
    }
?>


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
for($i=0;$i<=5;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            if($i%2!=0)
            {
                echo "+";
            }
            else
            {
                echo "*";
            }
            
        }
        echo "<br>";
    }
?>



<?php
for($i = 0; $i<6; $i++) {
 for($j=0; $j<=$i; $j++) {
  echo '*';
 }
 echo '</br>';
}

for($k = 5; $k>0; $k--) {
 for($l=$k; $l>0; $l--) {
  echo '*';
 }
 echo '</br>';
}
?>