<?php

class Firstclass{
    
    function __construct(){             //parent class constructor
     $this->fname="Sandeep";
     $this->lname="Konakanchi";
     $this->age=25;
         echo "<br>";
        echo "this is from constructor class";
        
    }
    
    public function printprop() {
         echo "<br>";
        echo $this->fname;
        echo "<br>";
        echo $this->lname;
        echo "<br>";
        echo $this->age;
        echo "<br>";
    
    }
    
}

class Secondclass extends Firstclass {
    
    function __construct(){                 //child class constructor
    
    echo "this is from secondclass";
        parent::__construct();          //by using scope resolution(::) we are echoing parent class constructor  values.
    }
    
}
$obj=new Secondclass();                   //creating new object by using "new" keyword
$obj->printprop();


?>