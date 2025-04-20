<?php
//Crie uma estrutura `switch` básica para verificar o valor de uma variável.

$valor = 7;
switch ($valor){
    case $valor >6:
        echo "<font color='grenn'>7 maior do que 6, portanto será cor verde!</font>";
        break;
    case $valor <6:
        echo "<font color='blue'>7 menor do que 6, portanto será cor azul!</font>";
        break;
        case $valor == 6:
            echo "<font color='red'>7 é igual a 6, portanto será cor vermelho!</font>";
            break;
             
    default:
    echo "error!!";
}
?>
