<?php
echo " <b>4-7</b><br>";
//num1が8を出力するようにデバッグ
$food = 7;
$num1 = 0;
if($food % 2 == 0){
    $num1 = $food / 2;
}
else{
    $num1 = ($food - 1) / 2;
    //was if($num > 3)
    if($num1 > 2){
        $num1 += 5;
    }
    else{
        $num1 += 6;
    }
}
echo "課題１ : " . $num1 . "<br/>";
