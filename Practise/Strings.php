<?php
/*echo strlen("nycasoft Inc");
echo "<br>";
echo str_word_count("nyca soft Inc");
echo "<br>";
echo strpos("nycasoft", "soft");
echo "<br>";
echo strrev("nycasoft");
echo "<br";*/
echo stripos ("nycasoft inc","Inc"); //strpos
echo "<br>";
echo str_replace("soft","Inc","nycasoft");
echo "<br>";
echo strstr("nycasoftInc","oft");
echo "<br>";
echo print_r(str_split("nycasoft"))."<br>";
echo substr("Hello world",4)."<br>";
echo substr("Hello world",4,3)."--------<br>";
echo trim("hello","ho")."----<br>";
echo ucfirst("nYCA")."----<br>";
echo str_shuffle("Hello World");
?>