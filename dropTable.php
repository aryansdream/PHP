<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="aruv";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry, We cannot Connect to the Server ,".mysqli_connect_error());
}
else {
    echo "Connection was successful..  We can proceed further."."<br>";
}

$sql = 'drop table student';
$a = mysqli_query($conn,$sql);
if($a){
    echo "Table dropped successfully";
}
else{
    echo "Can't drop the table";
}

?>

