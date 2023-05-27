<?php
$cookie_name = "user2";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (60), "/") // 86400 = 1 day - 3600 = 1 hour - 60 = 1 min
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<?php 

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else if ($_COOKIE[$cookie_name] == "") {
    echo "Cookie is null";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
</body>
</html>