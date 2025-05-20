<?php

$arr = [1,2,3,4];
var_dump($arr);
print_r($arr);

echo "<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo "Lenght of the arr : ", count($arr);
echo "<br>";

$index = 0;

for($index=0;$index<count($arr);$index++){
    echo $arr[$index];
}

# assigning a perticular value to index number 
echo "<br>";
$arr[0]=74;
echo "<br>";
print_r($arr);


# assiging empty array
echo "<br>";
$arr1 =[];
print_r($arr1);

$var=10;
$arr1[]=$var;
print_r($arr1);


$arr1[0]=[45,494,464,4];
$arr1[1]=[787,9,6,64,61];
echo "<br>";
print_r($arr1);



#associated Array -- key which are define by the user itself 
echo "<br>";
$a=["Mon","Tues","Wed","Thur","Fri","Sat","Sun"];
echo "<br>";
print_r($a);

$b=["Monday"=>"Mon","Tuesday"=>"Tues","Wednesday"=>"Wed","Thursday"=>"Thur","Friday"=>"Fri","Saturday"=>"Sat","sunday"=>"Sun"];
echo "<br>";
print_r($b);

echo "<br>";
foreach($b as $values){
    echo "$values <br>";
}


$userdetails = [
    "ram" => "ram@gmail.com",
    "vikas" => "vikas@gmail.com"
];

echo "<br>";
print_r($userdetails);

$userdetails["abc"]="abc@gmail.com";


echo "<br>";
print_r($userdetails);


?>