<?php
$con=mysqli_connect("localhost","root","root","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM pagination limit 0,3";     //I have nine records in my db
$result=mysqli_query($con,$sql); ?>

         <table border="3">
            <tr> 
                    <td width="7%"><strong>ID</strong></td>
                    <td width="7%"><strong>name</strong></td>
                    <td width="7%"><strong>state</strong></td>                    

            </tr>

<?php
// Associative array
while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['state']; ?></td>
             </tr>

<?php } ?>
</table>

<?php
$count= mysqli_num_rows($result);
$a=$count/3;
//echo $a;
echo "<br>";
echo "<br>";


for($i=1;$i<=$a;$i++){
    ?> <a href="pagination.php/page="<?php echo $i." "; ?>" style="text-decoration:none;"><?php echo $i." "?></a><?php
}
  






https://www.youtube.com/watch?v=takddjxhWT0