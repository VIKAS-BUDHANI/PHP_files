<?php

$servername = "localhost";
$username = "root";
$password = ""; // beacuse of XAMPP so no need to give password 
$dbname = "my_database";
// createing a connection

$conn=mysqli_connect($servername, $username ,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    echo "Mysql connected successfully..". "<br>";
  }

  // creating a user table 

  $sql ="CREATE TABLE user(
  user_id int AUTO_INCREMENT primary key,
  user_name varchar(50) not null unique,
  email varchar(50) unique,
  password varchar(10) not null,
  first_name varchar(50),
  last_name varchar(50),
  created_at timestamp default current_timestamp,
  updated_dat timestamp default current_timestamp on update current_timestamp)";

  if ($conn->query($sql)===TRUE){
    echo "user table created sucessfully";
  } else{
    echo "falied to created user table" . $conn->error . "<br>";
  }



  // creating the role table 

  $sql=" CREATE TABLE if not exists roles (
  role_id int auto_increment primary key,
  role_name varchar(50) not null unique
  )";

  
if ($conn->query($sql)===TRUE){
    echo "Role table created sucessfully";
  } else{
    echo "falied to created role table" . $conn->error . "<br>";
  }


  // creating user_role table

  $sql = "CREATE TABLE IF NOT EXISTS user_role (
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY (user_id, role_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (role_id) REFERENCES roles(role_id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table user_role created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();

?>