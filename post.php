<html>
<head>
    <title>
        SUMPHP
    </title>
</head>
<body>
    <form method="Post">
        first number: <input type="number" name="n1"><br><br>
        second number: <input type="number" name="n2"><br><br>
        <input type="submit" name="add" value="Add">
    </form>


    <?php
    if(isset($_POST["add"])){
        $a=$_POST["n1"];
        $b=$_POST["n2"];
        $c=$a+$b;
        echo"Sum of number is $c";
    }
    
    ?>
</body>
</html>
