<html>
<head>
    <title>MySQL Select Example</title>
    <head>
        <body>
            <h1>Update query</h1>
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username ="root";
            $password = "";
            $dbname = "my_database";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "MySQL connected successfully.......<br>";
            }

            // Update data in roles table
            $sql = "UPDATE roles SET role_name='administrator' WHERE role_id=1"; 
            if (mysqli_query($conn, $sql)){
                echo "Record updated successfully<br>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }


            mysqli_close($conn);
            ?>
        </body>
    </head>
</html>