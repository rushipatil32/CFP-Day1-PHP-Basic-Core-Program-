<?php
$number = readline('Enter the number : ');
function primeNumber($number)
{
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
$isPrime = primeNumber($number);
if ($isPrime == 1) {
    echo "$number is a Prime Number";
} else {
    echo "$number is Not Prime Number";
}
primeNumber($number);
?>