<?php

echo "bilangan prima =";
for($x=1; $x<=37; $x++){
    $i=0;
    for ($y=1; $y<=$x; $y++){
        if($x % $y == 0){
            $i++;
        }
        }if($i == 2){
            echo "$x  ";
        }
    }
    ?>