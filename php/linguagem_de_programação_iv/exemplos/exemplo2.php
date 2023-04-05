<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) 
{
  echo $cars[$x];
  echo "<br />";
}
echo "<br />";

var_dump($cars);
echo "<hr />";
echo "<br />";

print_r($cars);
echo "<hr />";

echo "<br />";
foreach($cars as $c)
{
    echo $c;
    echo "<br />";
}
echo "<br />";

// Conte de um a 100 e mostre em negrito os números pares
for($x = 0; $x <= 100; $x++) 
{
    if ($x % 2 == 0)
    {
        echo "<b>$x</b>&nbsp;";
    }
    else
    {
        echo $x . "&nbsp;";
    }
    if ($x % 10 == 0)
    {
        echo "<br />";
    }
}
?>

