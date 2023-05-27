<?php
// set the expiration date to one hour ago
setcookie("user2", "", time() - 60);
$user = $_COOKIE["user2"];
unset($_COOKIE["user2"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo "Cookie ". $user . " is deleted";
    echo "<br><br>";
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled." . count($_COOKIE);
      } else {
        echo "Cookies are disabled.";
      }
?>
</body>
</html>