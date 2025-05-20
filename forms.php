<html>
<head> 
    <title>PHP FORMS</title>
</head>
    <body>
        
        <form method="GET">
            Username : <input type="text" name ="User_name" ><br><br>
            Password : <input type="password" name="password"><br><br>
            <input type="submit" name="Name" value="Show">

        </form>
        <?php
        # Get --  is used to retirve the data from a server
        # POST -- is used to submit data to server to create or Update 

        if(isset($_GET["Name"])){   
            $a=$_GET["User_name"];
            $b=$_GET["password"];
            echo "Username : $a <br>";
            echo "Password : $b";


        }
        ?> 
    </body>

</html>