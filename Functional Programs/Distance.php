<?php
 /**
     * Function to calculate the distance between two points on cartesian plane and print the distance
     */
    function dist(){
        $x = readline("Enter a value of x");
        $y = readline("Enter a value of y");
        $sqrt  =sqrt(($x*$x)+($y*$y));
        echo "distance is ".$sqrt."\n";
    }
//calling the method
dist();
?>
