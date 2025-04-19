<?php

# Crie uma variável `$objeto` e atribua um objeto stdClass vazio a ela.
$objeto = new stdClass();

# Adicione uma propriedade "nome" a este objeto.
$objeto->nome = "Exemplo de Nome";

# Para verificar, você pode exibir o objeto (isso mostrará suas propriedades)
var_dump($objeto);

# Ou acessar a propriedade diretamente:
echo "<br>O nome do objeto é: " . $objeto->nome;

?>