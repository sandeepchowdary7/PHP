<?php

class Firstclass {                         //class defination
    
    var $property;  //property
    
    // method()
    function getproperty(){
        echo $this->property;   
    }                                    
    
    // method()
    function setproperty($value){
        $this->property=$value;
    }                                    
}
$obj = new Firstclass();                //creating newobject
$obj->setproperty("Nycasoft");          //setting object value
$obj->getproperty();                    //getting object values

$obj = new Firstclass();
$obj->setproperty(".Inc");
$obj->getproperty();

$obj = new Firstclass();
$obj->setproperty("<br> bridgewater");
$obj->getproperty();

$obj = new Firstclass();
$obj->setproperty("<br> Boston");
$obj->getproperty();

