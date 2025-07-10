<?php
$cookie_name = "User";
$cookie_value = "Aryan";
setcookie($cookie_name,$cookie_value,time()+5,"/")

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_COOKIE[$cookie_name];
    ?>
</body>
</html>