<?php
$vehicle = array(
    array("Volvo","XC 100","S 500"),
    array("BMW", "M4", "X1", "X6"),
    array("Toyota", "Fortuner", "Land Cruiser"),
    array("Audi", "Ace","R1","R8","R10")
);

echo count($vehicle)."<br>";  
for ($i = 0; $i < count($vehicle); $i++){
    echo count($vehicle[$i])."<br>";
};

echo"<br>"."<br>"."<br>";
for ($i = 0; $i < count($vehicle); $i++) {
   
    for ($j = 0; $j < count($vehicle[$i]); $j++) {
        if($j==0){
            echo "<b>".$vehicle[$i][0]."</b>";
        }
        else{
            if($j==0){
                continue;
            }    
        echo "<ul>";
        echo "<li>" . $vehicle[$i][$j] . "</li>";
        echo "</ul>";
        }

    }
    
}
?>
