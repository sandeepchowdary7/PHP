<!doctype html>
<?php
setcookie("nyca","nycasoft inc",time()+3000);
?>
<html>
	<head>
		<title>Page Title</title>
		
	</head>

	<body>
            <?php
                    if(count($_COOKIE)>0){
                        echo "cookie is enabled";
                    } else {
                        echo "cookie is disabled";
        }
        ?>
	</body>
</html>