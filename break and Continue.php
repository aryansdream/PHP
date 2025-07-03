<?php
for($i=1 ; $i <=10; $i++){
    if ($i ==4){
        break;
    }
    echo $i."<br>";
}
echo"<br>";

for ($i =1; $i <=10; $i++){
    if($i ==4){
        continue;
    }
    echo $i."<br>";
}