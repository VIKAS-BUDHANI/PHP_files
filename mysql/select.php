<html>
<head>
    <title>MySQL Select Example</title>
    <head>
        <body>
            <h1>MySQL Select Example</h1>
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

            // Selecting data from roles table
            $sql = "SELECT * FROM `roles` WHERE role_name='editor'"; // Corrected table name with backticks 
            // for filtering the data we can use WHERE clause in $sql query
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Number of rows: " . mysqli_num_rows($result);
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            if (mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_assoc($result)){
                echo "<br>Role ID: " . $row["role_id"] . "<br>";
                echo "Role Name: " . $row["role_name"] . "<br>";
                }  // for retrieving data from the database
                
                /*

                $row=mysqli_fetch_assoc($result);
                echo "<br>Role ID: " . $row["role_id"] . "<br>";
                echo "Role Name: " . $row["role_name"] . "<br>";
                */
            }

            
            

            // Closing the connection
            mysqli_close($conn);
            ?>
        </body>
    </head>
</html>

        <!-- to fetch data from the database we can use
            # mrsqli_fetch_assoc() - fetches a result row as an associative array e.g. $row["role_id"]
            # mysqli_fetch_row() - fetches a result row as a numeric array e.g. $row[0]
            # mysqli_fetch_array() - fetches a result row as an associative array, a numeric array, or both
            # mysqli_fetch_object() - fetches a result row as an object e.g. $row->role_id
            # mysqli_fetch_all() - fetches all result rows as an associative array, a numeric array, or both
            # mysqli_num_rows() - returns the number of rows in a result set
            # mysqli_num_fields() - returns the number of fields in a result set
            # mysqli_free_result() - frees the memory associated with a result set
        -->