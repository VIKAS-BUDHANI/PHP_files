<?php
#$file=fopen("demo.txt","w");
#fwrite($file,"Hello , this is a file!");
#fclose($file)

//$file=fopen("demo.txt","r");
//$content=fread($file,filesize("demo.txt"));
//echo $content;
//fclose($file);

if (file_exists("demo.txt")){
    echo "File exist....";
    unlink("demo.txt");
    echo "File deleted....";
}
else{
    echo "file does not exist..";
}


mkdir("File project");
$f = opendir("File project");
while(($file=readdir($f)!==false)){
    echo $file."<br>";
}
closedir($f);

?>