<?php
$servername = "localhost";
$username = "root";
$password = ""; // because of XAMPP so no need to give password 
$dbname = "my_database";

// creating a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "MySQL connected successfully.." . "<br>";
}

// Insert values into roles table
$sql = "INSERT INTO roles (role_name)
VALUES ('admin'),
      ('user'),
      ('editor'),
      ('author'),
      ('guest'),
      ('subscriber'),  
      ('premium'),     
      ('manager')";

/* other way to send the query to the database
mysqli_query($conn, $sql);
*/

if ($conn->query($sql) === TRUE) {
    echo "Inserted records into the roles table successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert values into user table - FIXED: corrected column order and typos
$sql = "INSERT INTO user (user_name, email, first_name, last_name, password)
VALUES 
    ('john_doe', 'john@example.com', 'John', 'Doe', 'password123'),
    ('jane_smith', 'jane@example.com', 'Jane', 'Smith', 'secure456'),
    ('mike_jones', 'mike@example.com', 'Mike', 'Jones', 'mikepass'),
    ('sarah_williams', 'sarah@example.com', 'Sarah', 'Williams', 'sarah123'),
    ('david_brown', 'david@example.com', 'David', 'Brown', 'dbrownpass'),
    ('lisa_taylor', 'lisa@example.com', 'Lisa', 'Taylor', 'lisapass1'),
    ('robert_garcia', 'robert@example.com', 'Robert', 'Garcia', 'rgarcia'),
    ('emily_miller', 'emily@example.com', 'Emily', 'Miller', 'emilypass'),
    ('thomas_wilson', 'thomas@example.com', 'Thomas', 'Wilson', 'twilson1'),
    ('jennifer_davis', 'jennifer@example.com', 'Jennifer', 'Davis', 'jdavis123')";

if ($conn->query($sql) === TRUE) {
    echo "Inserted records into the user table successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert values into user_role table - this is correct
$sql = "INSERT INTO user_role (user_id, role_id)
VALUES 
    (1, 1),  
    (2, 2),  
    (3, 3),  
    (4, 4),  
    (5, 2),  
    (6, 5),  
    (7, 6),  
    (8, 7),  
    (9, 8),  
    (10, 2)"; 

if ($conn->query($sql) === TRUE) {
    echo "Inserted records into the user_role table successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>