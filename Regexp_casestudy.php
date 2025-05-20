<?php
    $error=[];

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["Username"];
        $email = $_POST["email"];
        $Phone = $_POST["Phone"];            
        $Password = $_POST["Password"];
        
        // user validation only letters (A-Z, a-z), length 5-12 characters
        if (!preg_match("/^[A-Za-z]{5,12}$/",$username)){
            $error[] = "Username must be be 5-12 alphabetic characters.";
            }
    
        // Email validation 
         if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/",$email)){
             $error[] = "Invalid Email.";
            }
    
        //phone validation
        if (!preg_match("/^\d{10}$/",$Phone)){
            $error[]="Phone number must contain 10 digits.";
            }
    
         //password validation
        if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$Password)){
            $error[]="Password must be at least 8 chracters long , include at least one Uppercase letter, one digit and one special character.";
            }

        if (empty($error)){
            echo "<p style='color: green;'> registration Successfull </p>";
        }
    


    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Form
        </title>
    </head>
    <body>
        <h2> User Registration Form</h2>
        
        <?php
        if (!empty($error)){
            echo "<ul style='color : red;'>";
            foreach($error as $error){
                echo "<li>". htmlspecialchars($error) . "</li>"; 
            }
            echo"</ul>";
        }
        ?>



        <form method="post" action="">
            Username : <input type="text" name = "Username"><br><br>
            Email : <input type="email" name="email"><br><br>
            Phone : <input type="text" name="Phone"><br><br>
            Password: <input type="password" name="Password"><br><br>
            <input type="submit"  value="register">
        </form>
        


    </body>
</html>