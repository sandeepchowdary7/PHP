<?php

class Mainclass{
    
    public $a=10;                               //it is public variable
    const B=20;                                 //for constnats and static value we should use "self::"
    public static $c=30;                           //for public static variables we should use "self::$c"
    
    function printprop(){
        echo"this is from Mainclass";
        echo "<br>";
        echo $this->a;
        echo "<br>";
        echo self::B;                           //for constnats and static value we should use "self::" {only inside self::}
        echo "<br>";
        echo self::$c;                          //for public static variables we should use "self::$c" {only inside self::}
        echo "<br>";
    }
}
$obj=new Mainclass();
$obj->printprop();
echo "<br>";

        echo "<br>";
        echo $obj->a;
        echo "<br>";
        echo Mainclass::B;                      //for constnats and static value we should use "Mainclass::" {for outside classname::}         
        echo "<br>";
        echo Mainclass::$c;                     //for public static variables we should use "Mainclass::$c" {for outside classname::}
        echo "<br>";

?>