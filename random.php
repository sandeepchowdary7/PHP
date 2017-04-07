

<?php
// $con =  mysqli_connect ("localhost","root","", 'familydairz');
////// mysql_select_db('familydairz',$con);  
//$sql = "SELECT * FROM `familydairz_2`";
////$sql = mysqli_query($con, $qry);
////$res = mysqli_fetch_all($sql, MYSQLI_ASSOC);
//
//echo '++++++++++++++++++++++++++++++++++++++';
//
////$con = mysqli_connect('localhost', 'root', '', 'test');
////$qry = 'SELECT * FROM users';
//$res = mysqli_query($con, $sql);
//$resultset = mysqli_fetch_all($res, MYSQLI_ASSOC); 
//
//
//echo '<pre>+++++++++++++++++++++'; print_r($resultset );





$con=mysqli_connect("localhost","root","root","familydairz");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM `familydairz_2`";
$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
print_r($row);

// Free result set
mysqli_free_result($result);

mysqli_close($con);