<?php
/**
     * Function to calculate the roots and print them on screen.
     */
    function quadratic(){
        /**
         * getting user input 
         */
    $a = readline('Enter a value : ');
    $b = readline('Enter b value : ');
    $c = readline('Enter c value : ');
    $delta = ($b * $b) - (4 * $a * $c);
    $root1OfX = (- $b + sqrt($delta)) / (2 * $a);
    $root2OfX = (- $b - sqrt($delta)) / (2 * $a);
    echo "Root 1 of x is : ".$root1OfX;
    echo "\nRoot 2 of x is : ".$root2OfX;
}
quadratic();
?>