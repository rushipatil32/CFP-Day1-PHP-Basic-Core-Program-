<?php
function windSpeed(){
    //getting user input
    $ws = readline("Enter a wind speed: ");
    $f = readline("Enter a temperature: ");
    $w =  35.74 + 0.62158 * $f + (0.4275 * $f - 35.75) * $ws**0.16;
    echo "Wind chill is ".$w."\n";

}
//calling cal function to calculate wind chill and print
windSpeed();
?>