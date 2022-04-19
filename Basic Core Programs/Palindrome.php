<?php
$Num = readline("Enter a number");
$reverse = 0;
$n = $Num;

while (floor($Num)) {
    $mod = $Num % 10;
    $reverse = $reverse * 10 + $mod;
    $Num = $Num / 10;
}
if ($n == $reverse) {
    echo "$n is a Palindrome number.";
} else {
    echo "$n is not a Palindrome number.";
}
?>