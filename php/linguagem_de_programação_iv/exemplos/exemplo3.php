<?php

$arr = array(1, 2, 3, 4);

foreach ($arr as &$valor) // arr = 0 -> $valor = 1 Alteração na memória
{
    $valor = $valor * 2; // 1*2 = 2...
}
print_r($arr);
echo "<br /><br />";

function writeMsg() 
{
    echo "Hello world!";
}
writeMsg();
echo "<br /><br />";

function familyName($fname) 
{
    echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
echo "<br /><br />";

function familyName1($fname, $year) 
{
echo "$fname Refsnes. Born in $year <br>";
}
familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");
echo "<br /><br />";


function sum(int $x, int $y) {
    $y++;
    $z = $x + $y;
    return $z;
}
$y = 10;

echo "5 + 10 = " . sum(5, $y) . "<br>";
?>