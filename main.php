<?php


$name ="Vikas Budhani"; # $ used to asign a variable 
$age = 26;

#echo "Name: $name , Age : $age \n";  # echo for printing the statement


define("app_name","my first app"); # syntax -- define(Name , Value)
#echo (app_name );


const mail = "abc@gmail.com";
#echo(mail);



# loops
# for loop
for ($a = 0;$a < 5; $a++){
    echo("\n$a");
}

# while loop

$b=0;
while ($b<5){
    echo("\n$b");
    $b++;
}


echo "My name is vikas Budhani \n","27 age ";

$a="Vikas";
echo "\n",$a,"\n";

$b="PHP";
print $b;

print "<h1><u> Hello World </u></h1>";

echo "<u> PHP </u>";

$name = print "Vikas Budhani";
#print $name;
echo $name;


$n=array("name"=>"PHP","Age"=>26);
#print_r($n);

$products = array("Pen","pencil","laptop","PC","MobiEr"); # array 
print_r ($products);
print_r($products[1]);

$customer_details = array("Name"=> "A","Age"=>26); # Associative array key and values
echo "<br>",$customer_details["Name"] ,"<br>"; #br for break the single line 
print_r($customer_details);

echo "<br>";
echo "<br>";


# random function
function kuchbhi(){
    echo "hanji kya haal chal ";
}

#kuchbhi();


# function to add 2 number 

function add($a,$b){
    echo "add : ".$a +$b;
}

add(1,1)








?>


