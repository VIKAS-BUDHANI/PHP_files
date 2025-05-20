

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Second Page</title>
</head>
<body>
    <h1>Welcome to the Second Page</h1>
    <?php
    
        //ini_set('session.use_cookies',0);
        //ini_set('session.use_only_cookies',0);
        //ini_set('session.use_trans_sid',1);
        session_start();
        //session_unset();
        //session_destroy(); # Start the session if you are using session solution 
        if (isset($_GET["Username"])) { # Check if the Username is set in the URL 
            $Username=$_GET['Username'];
            #echo "<h1>Welcome $name</h1>";
           #setcookie("Username",$Username,time()+5); // # set cookie for username and it have always key value pair , time here means expiry time in seconds
            $_SESSION["Username"] = $Username; 
            displaymainheading($Username); 
    
        }      
    ?>
     <form action="third.php" method="get">
    <fieldset>
        <legend>Enquiry Form</legend>
        <p>
            <label for="input_text"> City :</label>
            <input type="text" id="city" name="city" placeholder="Enter your name" required>
        </p>

        <!--<input name="Username" type="hidden" value="<?php echo $Username ;?>"> # hidden form feild solution -->
    </fieldset>
    <p><input type="Submit"> <input type="reset"></p>
    </form>


</body>
</html>


<?php
    function displaymainheading($Username){
        echo "<h1>Welcome $Username </h1>";

    } 
    ?>