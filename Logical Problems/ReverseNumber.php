<?php
/**
 * program to fin reverse number 
  */  
  function reverseNumber(){
$num =readline("Enter a number: ");  
$revnum = 0;  
while ($num > 1){
    $rem = $num % 10; 
    $revnum = ($revnum * 10) + $rem;  
    $num = ($num / 10);      
    }  
echo "Reverse number of is: $revnum";  
}
reverseNumber();

?>  