<?php
//Utilize a estrutura `elseif` em uma condição com múltiplas possibilidades.

$dez = 10;
if ($dez > 15) {
    echo "<br>";
    echo "O numeral 10 é maior do que 15";
} elseif ($dez == 15) {
    echo "O numeral 10 é igual a 15";
}elseif ($dez != 15 || $dez < 15) {
    echo "O numeral 10 é diferente de 15 e menor também.";
}

?>

