<?php
$food = 7;
$num1 = 0;
if($food % 2 == 0){
    $num1 = $food / 2;
}else{
    $num1 = ($food - 1) / 2;
    if($num1 > 2){
        $num1 += 5;
    }else{
        $num1 += 6;
    }
}
echo $num1;
