<?php

$string = "Hallo Wesley";
$reverse_string = "";

$words = explode(' ', $string);
foreach($words as $word)
{

    $reverse_string .= strrev($word) . ' ';
}

$reverse_string = substr($reverse_string, 0, strlen($reverse_string) - 1);
echo $reverse_string;

?>