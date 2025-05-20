<?php
/*
print_r($_POST);
echo "<br>";
print_r($_GET);
echo "<br>";
print_r($_REQUEST);
echo "<br>";
*/


/*
$name = $_POST['Username'];
$city =$_POST['city'];
echo "Welcome $name  from $city ....<br>";
*/
if (isset($_GET["Username"]) && isset($_GET["city"])){
    $name = $_GET['Username'];
    $city =$_GET['city'];
    displaymainheading($name, $city);
    echo "Welcome $name  from $city ....<br>";
}
?>

<?php

    function displaymainheading($name, $city){
        echo "<h1>Welcome $name from $city</h1>";
}
?>