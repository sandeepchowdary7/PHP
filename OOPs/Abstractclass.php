<?php
                                //abstract cls is nothing but containg one abstract method and without body.
abstract class Mainclass{               // defining abstract class
    
    public $value;
    
     function setvalue($value){
        $this->value=$value;
    }
    function getvalue(){
        return $this->value;
    }
    
    abstract protected function printprop();            // defining abstract method
}

class Subclass extends Mainclass{
    
    function printmsg(){
        echo "this is example msg";
    }
    
    protected function printprop(){                     // implementing same body in child class also {printprop()}
        echo "this is abstract class";
    }
    public function printecho(){                           // abstract cls is protected by creating one method we are converting protected to... 
        $this->printprop();                                     //public access level...
    }

}
$obj=new Subclass();
$obj->printmsg();
echo "<br>";
$obj->printecho();

?>

// in abstract class access level must be equal or weaker level which is defined in a parent class then only it will echoing in child class. otherwise it will not allow to call.


// no of required parameteres/arguments in method/function should be the same in both parent and child classes.