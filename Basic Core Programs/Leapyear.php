<?php
$Year = readline("Enter a Year");
if ($Year%400==0 and $Year%100 !=0 ) {
    echo "$Year is a leap year";
}
else if ($Year%4==0){
    echo "$Year is a leap year";
} else{
    echo "$Year is not a leap year";
}
?>