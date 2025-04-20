<?php
//Utilize o operador de comparação de identidade (`===`) em uma condição `if`.

$numero = 10;
$texto = "10";

if ($numero === 10) {
    echo "A variável \$numero é idêntica ao inteiro 10.";
} else {
    echo "A variável \$numero não é idêntica ao inteiro 10.";
}

echo "<br>";

if ($texto === "10") {
    echo "A variável \$texto é idêntica à string \"10\".";
} else {
    echo "A variável \$texto não é idêntica à string \"10\".";
}

echo "<br>";

if ($numero === $texto) {
    echo "A variável \$numero é idêntica à variável \$texto.";
} else {
    echo "A variável \$numero não é idêntica à variável \$texto. Eles têm o mesmo valor, mas tipos diferentes.";
}
?>
