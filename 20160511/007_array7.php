<?php

$a = [
      ['AA', 'AB', 'BA', 'BB'],
      ['CA', 'CB', 'DA', 'DB'],
      ['EA', 'EB', 'FA', 'FB']
     ];

echo "<pre>";
var_dump ($a);
echo "</pre><br>";

foreach ( $a as $key1 => $val1 ){
    foreach( $val1 as $key2 => $val2){
        echo $key1. " ". $key2. " ". $val2. "<br>";
    }
}

 ?>
