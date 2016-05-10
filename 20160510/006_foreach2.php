<?php

$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 'aiueo'=>12345];
var_dump( $a );
echo "<br />";

foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}

?>
