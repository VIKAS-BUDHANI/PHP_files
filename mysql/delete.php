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

            // delete data from roles table

            $sql = "DELETE FROM roles WHERE role_id=2";
            if (mysqli_query($conn, $sql)){
                echo "Record deleted successfully<br>";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }


            mysqli_close($conn);
            ?>
        </body>
    </head>
</html>