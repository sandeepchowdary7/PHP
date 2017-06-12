<?php

class Mainclass{
    
    function printprop(){
        echo "this is printprop method";
    }
}

 __autoload($classname){
     
     include_once($classname'.php');               //For example If you want to load many files then class name and folder name is same then                                                        only it will applies other wise every time you have to write filepath.
 }
$obj= new Mainclass();
$obj->printprop();

?>