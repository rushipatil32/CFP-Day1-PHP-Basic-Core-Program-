<?php
/**
 * program to to find perfectNumber
 *Function to check if a number is perfect
 */
    function perfectNumber(){
$num = readline('Enter Number : ');
$total = 0;
for ($i = 1; $i < $num; $i++) {
  if ($num % $i == 0)
    $total += $i;
}
if ($total == $num)
  echo "$num is a perfect number";
else
  echo "$num is not a perfect number";
}
perfectNumber();
?>