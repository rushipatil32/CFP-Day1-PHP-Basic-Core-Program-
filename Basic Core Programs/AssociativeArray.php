<?php
// first way
$marks = array("Rahul"=>70, "Rohit"=>60, "Akshay"=>75);
echo "Rohit score " . $marks['Rohit'] . "Marks";

// second way
$marks = [
            "Rahul"=> 70, 
            "Rohit"=> 60, 
            "Akshay"=> 75
            ];
            echo "Rohit score " . $marks["Rohit"] . "Marks";
?>