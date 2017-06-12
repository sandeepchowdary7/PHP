<?php 

class Firstclass{
    
    public $fname="sandeep";
    public $lname;
    public $age=24;
    const VALUE=100;
    public function getproperty(){
        echo $this->lname;
    }
    public function setproperty($value){
        $this->lname=$value;
    }
    public function printproperties(){
        echo $this->fname;
        echo"<br>";
        echo $this->lname;
        echo"<br>";
        echo $this->age;
        echo"<br>";
        echo self::VALUE;
        
    }
}
$obj=new Firstclass();
$obj->setproperty('Konakanchi');
$obj->printproperties();

?>