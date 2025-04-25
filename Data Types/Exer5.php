<?php
/*. O que é o tipo de dado `null` em PHP?
20. Como você atribui o valor `null` a uma variável em PHP?
21. Qual função em PHP pode ser usada para verificar se uma variável é `null`?
22. Qual é a diferença entre uma variável não definida e uma variável com o valor `null`? */

$Var = null;
$Var2;   
echo var_dump($Var);
echo "<br>";
echo ($Var2);

//is_null($Var2);

if ($Var2 == null) {
    echo "Variável está vazia";
}else{
    echo "Varivável não está vazia";   
}

?>