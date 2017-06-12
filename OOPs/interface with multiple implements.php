<?php

interface Mainclass{
    
    
    function printprop($x,$y);
}
interface Submainclass{
    function displaytext();
}
interface Subclass extends Mainclass, Submainclass {
    
    function printecho();
}

class SUBSUBclass implements Subclass{
    
    function printprop($x,$y){
        echo ($x-$y);
        echo "<br>";
    }
    function displaytext(){
        echo "It is a display text from Submainclass ";
        echo "<br>";
    }
    function printecho(){
        echo "It is a display text from Subclass";
        echo "<br>";
    }
}
$obj= new SUBSUBclass();
$obj->printprop(100,20);
echo "<br>";
$obj->displaytext();
echo "<br>";
$obj->printecho();
echo "<br>";


?>