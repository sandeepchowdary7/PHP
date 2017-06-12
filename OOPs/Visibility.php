<?php


class Mainclass{
    
    public $a=10;                              //we can access in and outside of the class in which it is declared.
    protected $b=20;                            //we can access inside class and its child classes in which it is declared.
    private $c=30;                              //we can access only inside of the class. It wont allow to access anywhere except inside.
}

class Subclass extends Mainclass{
    
         public $x=70;
    protected $y=80;
    private $z=90;
    
    public function printprops(){
        echo $this->a;
        echo "<br>";
        echo $this->b;
        echo "<br>";
        echo $this->c;
        echo "<br>";
        echo $this->x;
        echo "<br>";
        echo $this->y;
        echo "<br>";
        echo $this->z;
        echo "<br>";
        
    }
}
    

$obj=  new Subclass();
$obj->printprops();                         //10 20  70 80 90 but $c will not outcomes because it is a private varible so it will access only                                                   inside of the class.

?>