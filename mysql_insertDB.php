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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO student(Name,Email,Phone_No) VALUES ('$name', '$email','$phone')";

$a = mysqli_query($conn,$sql);
if($a){
    echo "Data inserted successfully";
}
else{
    echo "Can't insert the data";
}

?>
