<!doctype html>

<html>
	<head>
		<title>DAY1 Script</title>
		
        <link rel="stylesheet" type="text/css" href="Day1.css"/>
         <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script
        Script to wrap tagline in a link
        <script>
            $(document).ready(function() {
        $("#head").wrapInner("<a href='Your Health Our Business'></a>");
        });
        </script> -->

	</head>

	<body>
        <div>
            <ul class=navi>
            <li><a href="#"> About us </a></li>
            <li><a href="#"> Products </a></li>
            <li><a href="#"> Login </a></li>
            <li><a href="#"> Signup </a></li>   
            </ul>
        </div>
        
        
        <h1 id="head"> Welcome to Family Dairz</h1>
        <form id="main" method="post" action="">
            <fieldset> 
                <legend> Family Dairz </legend> 
                
       MM/YYYY/DATE::<font color="red"> <span class="required">*</span> </font> 
                    <input type="datetime-local" placeholder="enter month and year">
                        <br> </br>
       LITERS: <font color="red"> <span class="required">*</span> </font>
                <input type="number" id="two" placeholder="enter liters" >  
                        <br> </br>
       AVG COST PER LITER: <font color="red"> <span class="required">*</span> </font>
                <span class="Rupees"> &#8377;
                    <input type="number" id="three" placeholder=" Enter avg cost per liter ">
                </span>
                        <br> </br>
      CUSTOMER NAME: <input type="text" id="four" placeholder="Enter Customer Name">
                        <br> </br>
      CUSTOMER NUMBER: <input type="tel" id="five" placeholder="Enter Customer number">
                        <br> </br>
        NOTE: <textarea id="six" placeholder="If any Comments Please Enter here" value=" "></textarea>
                        <br></br>
        <button type="submit" id="seven" value="submit" href="#"> SUBMIT</button> &nbsp; &nbsp; &nbsp; &nbsp;

        <button type="reset" id="eight" value=""> RESET </button>

        </fieldset>
                
        </form>

            <div>
            <ul class=foot>
            <li><a href="#"> Contact us </a></li>
            <li><a href="#"> Terms and conditions </a></li>
            <li><a href="#"> location </a></li>
            <li><a href="#"> Created By </a></li>   
            </ul>
        </div>

	</body>
</html>