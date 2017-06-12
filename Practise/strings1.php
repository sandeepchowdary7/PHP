<?php
        $marks = array(
           "vamsi" => array (
              "fitness_level1" => 35,
              "fitness_level2" => 30,    
              "fitness_level3" => 39
           ),
           
           "kohli" => array (
              "fitness_level1" => 30,
              "fitness_level2" => 32,
              "fitness_level3" => 29
           ),
           
           "rahane" => array (
              "fitness_level1" => 31,
              "fitness_level2" => 22,
              "fitness_level3" => 39
           )
        );
       
        /* Accessing multi-dimensional array values */
        echo "Marks for vamsi in fitness_level1 : " ;
        echo $marks['vamsi']['fitness_level1'] . "<br />";
       
        echo "Marks for kohli in fitness_level2 : ";
        echo $marks['kohli']['fitness_level2'] . "<br />";
       
        echo "Marks for zara in fitness_level3: " ;
        echo $marks['rahane']['fitness_level3'] . "<br />";
     ?>