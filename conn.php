<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry, We cannot Connect to the Server ,".mysqli_connect_error());
}
else {
    echo "Connection was successful..  We can proceed further.";
}

?>
