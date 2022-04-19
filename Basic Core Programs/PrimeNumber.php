<?php
$check = 0;
$num = (int)readline('Enter Number to check its prime or not ');
for($i=2;$i<$num;$i++){
    if($num % $i == 0){
        $check++;
        break;
    }
}
if($check == 0){
    echo "It is a prime number"; 
}
else{
    echo "It is not a prime number"; 
}
?>