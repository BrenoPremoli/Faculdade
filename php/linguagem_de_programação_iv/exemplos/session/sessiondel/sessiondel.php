<?php
session_start(); 

echo "Cor: " . $_SESSION["favcolor"];
echo "<br>";
echo "Animal: " . $_SESSION["favanimal"];

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
echo "<hr>";
print_r($_SESSION);
echo "<hr>";
// remove all session variables
session_unset();
print_r($_SESSION);
echo "<hr>";
// destroy the session
session_destroy();
print_r($_SESSION);
?>
</body>
</html>