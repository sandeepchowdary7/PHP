<?php

final class Mainclass {                         // here we are defining final keyword for class so it can't be extended.
    
    function printprop(){
        echo "this is printprop method";
    }
}
//class Secondclass extends Mainclass {
//    
//    function printecho(){
//        echo "this is printecho method";
//    }
//}
$obj= new Mainclass();
$obj->printprop();

?>