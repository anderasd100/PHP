<?php
#Acesse o primeiro elemento do array `$cores` e armazene em uma variável `$primeira_cor`.
$cores= ["verde", "amarelo", "azul"];
$primeira_cor = $cores[0];
if ($primeira_cor == "verde"){
    echo "<font color='grenn'>$primeira_cor</font>";
}else{
    echo "<font color='blue'>Não é cor verde!!</font>";
}
echo "<br>";
echo implode (", ",$cores);
echo "<br>";
?>