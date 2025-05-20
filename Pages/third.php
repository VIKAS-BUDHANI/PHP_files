

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>third Page</title>
</head>
<body>
    <h1>Welcome to the third Page</h1>
    <?php
        //ini_set('session.use_cookies',0);
        //ini_set('session.use_only_cookies',0);
        //ini_set('session.use_trans_sid',1);
        session_start();
        //session_unset();
        //session_destroy(); 
        $name = "Guest"; # Default value for name
        // secod way to expire the cookies $_COOKIE[]=[];
        if (isset($_SESSION["Username"])) { # Check if the Username is set in the URL  change the word when ur using session , cookie, or hidden form field method solutiuon 
            $name=$_SESSION['Username'];
            #echo "<h1>Welcome $name</h1>";
          
        }
        
        if (isset($_GET["city"])) { 
            #echo "<h1>Welcome to $city</h1>";
            $city=$_GET['city'];
        }

        displaymainheading($city,$name);
    
    
    ?>

</body>
</html>
<!--
* In second page we are not requesting city name and in third page we are not able to request  username -- 
* solution are - Hidden form field, cookies
    -->
<?php
    function displaymainheading($city,$name = "Guest"){
        echo "<h1>Welcome $name in Web development course from $city </h1>";  
    }


?>


<!-- limitations of cookies
* 1. Cookies are limited in size (usually around 4KB), which can restrict the amount of data you can store.
* 2. Cookies are sent with every HTTP request, which can increase the size of requests and slow down performance.
* 3. Cookies can be disabled by users, which can prevent your application from working correctly.
* 4. Cookies are not secure, as they can be easily read and modified by users.
* 5. Cookies are not suitable for storing sensitive information, such as passwords or credit card numbers.
* 6. Cookies can be affected by browser settings, such as privacy settings or cookie policies.


limitations of session
* 1. Session data is stored on the server, which can consume server resources.
* 2. Sessions are not suitable for storing large amounts of data.
* 3. Sessions can be lost if the server crashes or if the session expires.
* 4. Sessions are not suitable for sharing data between different servers. 


to remove the session
* 1. session_destroy() - This function destroys all data registered to a session.
* 2. session_unset() - This function frees all session variables currently registered.

-->