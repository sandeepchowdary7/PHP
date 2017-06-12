<?php
class Mainclass{
    
    public $username;
    public static $minPasswordLen = 6;
    
    public static function passwordvalid($password){
        if(strlen($password)>= self::$minPasswordLen){
            return true;
        } else 
            return false;   
    }
}
$password="nycasoft";                           // ENTER PASSWORD HERE

if(Mainclass::passwordvalid($password)){
    echo "password is valid";
} else
    echo "Please enter correct password";

?>