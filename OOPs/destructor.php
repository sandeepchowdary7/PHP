

<?php
                                                        //destructor will helpful to remove or cutdown any extra references... or It will works as garbage collector to remove unecessery data
class Mainclass{
    
    function __construct (){                                // this is Mainclass constructor
        $this->name="nycasoft";
        $this->location="boston";
        $this->state="MA";
        echo "<br>";
        echo "this is from Main";
    }function __destruct(){
        echo "<br>";
        echo"this is Mainclass destruct";                       // this is Mainclass destructor
    }
    
    public function printprops(){
        echo "<br>";
        echo $this->name;
        echo "<br>";
        echo $this->location;
        echo "<br>";
        echo $this->state;
        echo "<br>";
        Mainclass::__construct();
    }
                          // this is Mainclass destructor
    
}

class Subclass extends Mainclass{
    
    function __construct (){
        echo "<br>";
        echo "this is from Subclass";                           // this is Subclass constructor
        Mainclass::__construct();
    }
    function __destruct(){
        echo "<br>";
        echo"this is Subclass destruct";                                // this is Subclass destructor
        Mainclass::__destruct();
    }
    
}
$obj=  new Subclass();
$obj->printprops();

?>