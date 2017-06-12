<?php
//$file = fopen("welcome.txt","r");
$if(!file_exists("info.php")){
    die ("file is not found");
}else{ $file=fopen("info.php","r");
}
?>