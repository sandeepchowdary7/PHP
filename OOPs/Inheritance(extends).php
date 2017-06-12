<?php

class Firstclass{
    
    public $property = 'nycasoft';
    const VALUE=10;
    
    public function getproperty(){
        echo $this->property;
    }
    public function setproperty($value){
        $this->property=$value;
    }
     public function add($x){
         echo self::VALUE+$x;
     }
}

class Secondclass extends Firstclass {
    
    public $newproperty="NYCASOFT";
    public function sub($y){
        echo parent::VALUE+$y;
    }
}
$obj = new Secondclass;
echo $obj->property;
echo "<br>";
echo $obj->newproperty;
echo "<br>";
echo Firstclass::VALUE;
echo "<br>";
echo Secondclass::VALUE;
echo "<br>";
$obj->add(50);
echo "<br>";
$obj->sub(80);

?>