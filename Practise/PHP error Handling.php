<?php 
//$fb=fopen("new1.php","w");

#****************************************die()******************************************
//if(!file_exists("new1.php")){
//    die("file dir is not found");
//} else {
//    $file=fopen("new1.php","r");
//}

function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

    set_error_handler("customError","E_USER_WARNING";)
         
        
         $test=2
        if ($test>=1){
       trigger_error ("$test is greater than one");
        }
       
    echo "ending script";
//create function with an exception

#*********************************************************Error Logging**************************
//error handler function
//function customError($errno, $errstr) {
//  echo "<b>Error:</b> [$errno] $errstr<br>";
//  echo "Webmaster has been notified";
//  error_log("Error: [$errno] $errstr",1,
//  "konasandeep302@gmail.com","From: webmaster@example.com");
//}
//
////set error handler
//set_error_handler("customError",E_USER_WARNING);
//
////trigger error
//$test=2;
//if ($test>=1) {
//  trigger_error("Value must be 1 or below",E_USER_WARNING);
//}


?>