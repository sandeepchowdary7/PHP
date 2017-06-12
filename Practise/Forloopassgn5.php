<?php
for($i=0;$i<=8;$i++)
{
    for($j=0;$j<=8;$j++)
    {
        if ($i=1||$i=9||$j=1||$j=9)
        {
    echo "*";
        }
    else 
        echo " ";
    }
    echo "<br>";
}

?>