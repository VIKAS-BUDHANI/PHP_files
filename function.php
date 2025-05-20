<?php

declare(strict_types=1);
function printnumber(int $limit,$skipnu){
    for($index=0; $index<=$limit; $index++){
        echo "Number". $index."<br>";
    }
}

printnumber(10);
?>