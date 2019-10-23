<?php
function tukar( &$x,&$y){
    $temp=$x;
    $x=$y;
    $y=$temp;
    return 0;
}
$temp=0;
echo "nilai sebelum di tukar <br>";
$x=1; 
echo " X = 1 </br>"; 
$y=2; 
echo "Y = 2 </br>";

echo " nilai setelah ditukar </br> ";
tukar($x,$y);
echo  "X = $x </br>" ;
echo "Y = $y ";