<?php 

class Mainclass{
    
    public $a=20;
    const B=30;
    public static $c=40;
    
    function printprop(){
        echo "this is from Mainclass";
        echo "<br>";
        echo $this->a;
        echo "<br>";
        echo self::B;
        echo "<br>";
        echo self::$c;
        echo "<br>";
    }
}

class Subclass extends Mainclass{
    
         public $x=80;
         const Y=90;
         public static $z=100;
    
    function printsubclass(){
        
         echo "this is from Subclass";
        echo "<br>";
        echo $this->x;
        echo "<br>";
        echo self::Y;
        echo "<br>";
        echo self::$z;
        echo "<br>";
//        echo $this->a;
//        echo "<br>";
//        echo parent::B;
//        echo "<br>";
//        echo parent::c;
//        echo "<br>";
    }
    
}
$obj=new Subclass();
$obj->printsubclass();
$obj->printprop();



?>