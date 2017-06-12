<?php
//function checkNum($x) {
//  if($x>1) {
//    throw new Exception("Value must be 1 or below");
//  }
//  return true;
//}
//
////trigger exception
//checkNum(2);
//create function with an exception

#***************************************************try n catch******************************************************
//function checkNum($x) {
//  if($x>1) {
//    throw new Exception("Value must be 1 or below");
//  }
//  return true;
//}
//
////trigger exception in a "try" block
//try {
//  checkNum(2);
//  //If the exception is thrown, this text will not be shown
//  echo 'If you see this, the number is 1 or below';
//}
//
////catch exception
//catch(Exception $e) {
//  echo 'Message: ' .$e->getMessage();
//}

##********************************************Creating a Custom Exception*********************************************
//class customException extends Exception {
//  public function errorMessage() {
//    //error message
//    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
//    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
//    return $errorMsg;
//  }
//}
//
//$email = "someone@example...com";
//
//try {
//  //check if
//  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//    //throw exception if email is not valid
//    throw new customException($email);
//  }
//}
//
//catch (customException $e) {
//  //display custom message
//  echo $e->errorMessage();
//}

#********************************************************multiple Exceptions************************************
//class customException extends Exception {
//  public function errorMessage() {
//    //error message
//    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
//    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
//    return $errorMsg;
//  }
//}
//
//$email = "someone@example.com";
//
//try {
//  //check if
//  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//    //throw exception if email is not valid
//    throw new customException($email);
//  }
//  //check for "example" in mail address
//  if(strpos($email, "example") !== FALSE) {
//    throw new Exception("$email is an example e-mail");
//  }
//}
//
//catch (customException $e) {
//  echo $e->errorMessage();
//}
//
//catch(Exception $e) {
//  echo $e->getMessage();
//}

#*******************************************************************Re-thrown***********************************************
//class customException extends Exception {
//  public function errorMessage() {
//    //error message
//    $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
//    return $errorMsg;
//  }
//}
//
//$email = "someone@example.com";
//
//try {
//  try {
//    //check for "example" in mail address
//    if(strpos($email, "example") !== FALSE) {
//      //throw exception if email is not valid
//      throw new Exception($email);
//    }
//  }
//  catch(Exception $e) {
//    //re-throw exception
//    throw new customException($email);
//  }
//}
//
//catch (customException $e) {
//  //display custom message
//  echo $e->errorMessage();
//}
##**********************************************************Top level Exception**********************
function myException($exception) {
  echo "<b>Exception:</b> " . $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');

?>
