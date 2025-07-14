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

$sql="CREATE TABLE student (
  Sl_no     INT        NOT NULL AUTO_INCREMENT,
  Name      VARCHAR(20) NOT NULL,
  Email     VARCHAR(255) UNIQUE,
  Phone_No  VARCHAR(15) UNIQUE,
  PRIMARY KEY (Sl_no)
)";

$a = mysqli_query($conn,$sql);
if($a){
    echo "Table created successfully";
}
else{
    echo "Can't create the database";
}

?>

