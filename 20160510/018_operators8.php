<?php

$x = true;
$x = !$x;
var_dump($x);

echo "<br />";

$y = false;
$y = !$y;
var_dump($y);

echo "<br /><br />";
$a = 5;

if(!$a > 1){
    echo "大きい";
}else{
    echo "小さい";
}

?>
