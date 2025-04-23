<?php

//Como você declara um array em PHP?
//Como você acessa o primeiro elemento de um array indexado em PHP?
Echo "<h1><font color='green'>Arrays INDEXADOS:</font></h1>";
$Var1 = ["amor", "alegria", "paz", "sabedoria"];

echo "Elemento 0: ", $Var1[0];
echo "<br>";
echo "Elemento 2: ",$Var1[2];
echo "<br>";
echo "<br>";
var_dump($Var1); //Qual função em PHP pode ser usada para verificar se uma variável é um array? (var_dump)
?>

<?php
//Quais são os dois tipos principais de arrays em PHP? (São indexados e Associativos)
//Como você acessa um elemento de um array associativo em PHP?

Echo "<h1><font color='green'>Arrays Associativos:</font></h1>";
echo "<br>";
$pessoa = ["nome" => "João", "idade" => 30, "cidade" => "São Paulo"];
echo $pessoa["nome"];  // Saída: João
echo "<br>";
echo $pessoa["idade"]; // Saída: 30
echo "<br>";
echo $pessoa["cidade"]; // Saída: 30
?>