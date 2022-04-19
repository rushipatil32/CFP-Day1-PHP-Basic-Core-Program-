<?Php
function creatAndIntialiseArray(){
$array = array();
$size = readline("Enter size of array ");
echo "Enter array elemnts \n ";
for($i=0; $i<$size; $i++){
        $array[$i] = readline("Enter $i elements\n");
    }
    return $array;
}

function displayArray($array){
    echo "Array elements are\n";
    for($i=0; $i < count($array);$i++){;
    echo $array[$i];
    }
}
$array = creatAndIntialiseArray();
displayarray($array);
?>