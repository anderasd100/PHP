<?php
#Declare uma variável `$temperatura` com o valor 28.5 e imprima "A temperatura atual é de [valor de \$temperatura] graus Celsius."
$Temp = 28.5;
$Fah = 77;
$Cal = (($Fah - 32) /$Temp);
echo "<h1>A temperatura atual é: </h1> <font color=grenn><h2>$Cal<h2></font> <br>", var_dump($Cal);
?>