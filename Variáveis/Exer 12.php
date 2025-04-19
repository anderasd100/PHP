<?php
#Concatene as variáveis `$nome` e `$mensagem` (adicionando um espaço entre elas) e armazene o resultado em `$saudacao`.
$Nome = "Anderson Abreu Rabelo";
$mensagem = "estudar é um processo importante.";
$saudacao = $Nome." ". $mensagem;

echo "<font color=grenn><h2>$saudacao<h2></font> <br>", var_dump($saudacao);
?>