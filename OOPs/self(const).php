<?php

class Firstclass{
    
    var $property;          //property
    const VALUE = 10;       //constant
    
    function sum($a){
        echo self::VALUE+$a;        //self keyword to get const, static and static varible values
    }                               // ::= scope resolution operator we can call constant values
}

$obj = new Firstclass();
$obj->sum(6);                   //set a value of a
echo "<br>";
echo Firstclass::VALUE;                 //:: (scope resolution operator) calling constant value of Firstclass
?>