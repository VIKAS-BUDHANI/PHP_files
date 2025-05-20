<html>
    <head>
        <title>
            Quantifiers expamples
        </title>
    </head>
    <body>
        <?php
        
        # using * (Zero or more times)
        $patern = "/a*/";
        $text = "aaaab";
        preg_match($patern,$text,$matches);
        print_r($matches);
        echo "<br>";

        # using + (one or more times)
        $patern1 = "/a+/";
        $text1 = "aaaaab";
        preg_match($patern1,$text1,$matches1);
        print_r($matches1);
        echo "<br>";

        # using ? (Zero or one time) - Matches any string that contains zero or one occurrences of n

        $patern2 = "/colou?r/";
        $text2="color";
        $text3="colour";
        preg_match($patern2,$text2,$matches2 );
        preg_match($patern2,$text3,$matches3);
        print_r($matches2);
        print_r($matches3);
        echo "<br>";

        # using {n} exactly n times
        $patern3 ="/a{3}/";
        $text4 = "baaab";
        preg_match($patern3,$text4,$matches4);
        print_r($matches4);
        echo "<br>";

        # using {n,} n or more times and same for usnign {n,m}between n and m times
        $patern4 ="/a{2,}/";
        $text5 = "aabaaa";
        preg_match($patern4,$text5,$matches5);
        print_r($matches5);
        echo "<br>";


        # metacharacters
        # \d	Find any digits-
        $a="/\d+/";
        $b = "My name is 45";
        preg_match($a, $b, $matches);
        print_r($matches);
        echo "<br>";

        #\D	Find any non-digits
        $a="/\D+/";
        $b = "My name is 45";
        preg_match($a, $b, $matches);
        print_r($matches);
        echo "<br>";

        # \w	Find any alphabetical letter (a to Z) and digit (0 to 9)
        $a="/\w+/";
        $b = "My_name_is_45";
        preg_match($a, $b, $matches);
        print_r($matches);
        echo "<br>";
        
        # \s	Find any whitespace character
        $a="/\s+/";
        $b = "My_name is_45";
        preg_match($a, $b, $matches);
        print_r($matches);
        echo "<br>";

        # using ranges : [a-zA-Z]
        $a="/[a-zA-Z]+/";
        $b = "Qad784";
        preg_match($a, $b, $matches);
        print_r($matches);
        echo "<br>";
        
        





        ?>
        
    </body>
</html>