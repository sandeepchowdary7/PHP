<?php 

class Firstclass{

     var $property ='This is from property';   //property
    
    function property(){                //method()
        echo "this is from method";
    }
}
$obj = new Firstclass();
echo $obj->property;
echo "<br>";
$obj->property();

?>