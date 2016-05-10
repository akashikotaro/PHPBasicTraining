<?php

$name = array("akashi", "akapi", "akapo", "akaso", "akasi");

foreach ( $name as $key => $value) {
  echo $key ." ". $value ."<br />";
}

echo "<br />";

$name[5] = "研修";

foreach ( $name as $key => $value) {
  echo $key ." ". $value ."<br />";
}


?>
