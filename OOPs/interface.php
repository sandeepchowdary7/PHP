<?php

interface Mainclass{
    
    function setvalue();
    function getvalue();
    function printprop($x,$y);
    
}

class Subclass implements Mainclass{
    
    function setvalue(){
        echo "this is from setvalue method";
        echo"<br>";
    }
    function getvalue(){
        echo "this is from getvalue method";
        echo"<br>";
    }
    
    function printprop($x,$y){
        echo ($x*$y);
    }
}
$obj=new Subclass();
$obj->setvalue();
$obj->getvalue();
$obj->printprop(6,5);



?>