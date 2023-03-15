<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - PHP</title>
</head>
<body>
    <?php
    echo "Olá, Mundo! Hoje é " . date('d/m/Y') . ". Dia do PI." ; // "." -> concatenação
    $x = 10;
    echo "<br>";
    echo $x;
    echo "<br><br>";

    $x = 5;
    $y = 10;
    function myTest()      
    {
        global $x, $y;
        $y = $x + $y;
    }   
    myTest();
    print $y; // print = echo
    echo "<br><br>";

    $x = 5985;
    echo $x;
    echo "<hr>";
    var_dump($x);
    echo "<br><br>";

    echo (rand(1,10));
    echo "<br><br>";

    define("PI", 3.14159);
    echo PI;
    echo "<br><br>";

    $x = 10;
    echo $a = $x++; // incremento antes e depois
    echo "<br>";
    echo $x;
    echo "<br><br>";

    $texto = "bom dia ";
    $texto .= "classe, ";
    $texto .= "como vcs estão indo na aula";
    echo $texto;
    echo "<br><br>";

    $t = date("H");
    if ($t < "10") 
    {
    echo "Have a good morning!";
    } 
    elseif ($t < "20") 
    {
    echo "Have a good day!";
    } 
    else 
    {
    echo "Have a good night!";
    }
    ?>
</body>
</html>
