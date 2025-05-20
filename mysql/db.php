<?php

/*

we have two ways to conenct Mysql database
1 - MySQLi extension
2 - PDO - PHP Data Objects so that we can use it with other databases like SQLite, PostgreSQL, etc.



*/

$servername = "localhost";
$username = "root";
$password = ""; // beacuse of XAMPP so no need to give password 

// createing a connection

$conn=mysqli_connect($servername, $username ,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "MySQL conenected sucessfully.......";
}

// creating a database 

$sql ="CREATE DATABASE my_database";
if ($conn->query($sql)===TRUE){
    echo "Database sucessfully created. ";
}else{
    echo "Error in creating database.";
}
$conn->close();

?>