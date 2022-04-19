<?php
$alphabet = readline('Enter Alphabet to check it is vowel or consonant: ');
$alphabet = strtolower($alphabet); 
if (strlen($alphabet) == 1) {
    if ($alphabet == "a" || $alphabet == "e" || $alphabet == "i" || $alphabet == "o" || $alphabet == "u") {
        echo "It is a Vowel"; 
    }
    else {
        echo "It is a Consonant"; 
    }
}
?>