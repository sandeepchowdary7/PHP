<?php 

class Mainclass{
    
    function printprop(){
        echo"this is from printprop method";
    }
    
    final function printecho(){                                 //by putting 'final' keyword we can't be override this method in child class
        echo"this is from printprop method";
    }
}

class subclass extends Mainclass{
    
    function printprop(){
        echo "this is overriding text from printprop method";
    }
      //function printecho(){
    //echo "this is overriding text from printecho method";               // so here we are commenting this method
  }
}
$obj= new subclass();
$obj->printprop();
echo "<br>";
Mainclass::printecho()



//Final keyword will prevents method overriding concept in child class from parent class.
    
    ?>