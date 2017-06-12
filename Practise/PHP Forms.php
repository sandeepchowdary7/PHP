<!doctype html>

<html>
	<head>
		<title>PHP Forms</title>
		
	</head>

	<body>
            <form id="formid" name="ME" method="GET" action="http://localhost/Sandeep/PHP/info.php?DEGREE=MS">
                FNAME: <input type="text" name="FNAME"> <br><br>
                LNAME: <input type="text" name="LNAME"> <br><br>
                GENDER: 
                <input type="radio" name="gender" value="male">MALE
                <input  type="radio" name="gender" value="female">FEMALE
                <br><br>
                <button type="submit">Submit</button>
        </form>
       <?php
        setcookie("ME","php",time()+60*60,"/");
        ?>
        
        
        

	</body>
</html>


 