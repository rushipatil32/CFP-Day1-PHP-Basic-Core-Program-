<?php
$Num1 = readline("Enter value of Num1: ");
$Num2 = readline("Enter value of Num2: ");

$option = readline("Enter 1 for Addition\nEnter 2 for Substraction\nEnter 3 for Multiplication\nEnter 4 for Division");

switch ($option) {
    case 1:
        echo $Num3 = $Num1 + $Num2;
        break;
    case 2:
        echo $Num3 = $Num1 - $Num2;
        break;
    case 3:
       echo  $Num3 = $Num1 * $Num2;
        break;
    case 4:
        echo $Num3 = $Num1 / $Num2;
        break;
    default:
        echo "Enter valid choice";
}
?>