/*

- Requisitos: HTML, css, JavaScript
<?php
echo phpversion();
?>
- Em PHP, palavras-chave (por exemplo. if else while echo, etc.), classes, funções e as funções definidas pelo usuário não são sensíveis a maiúsculas de minúsculas.

- Nota: No entanto; todos os nomes de variáveis são sensíveis a maiúsculas de minúsculas!
<?php

#Sintaxe para comentários em código PHP:

// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
?>

- Lembre-se de que os nomes de variáveis PHP são sensíveis a maiúsculas de minúsculas!

- O var_dump() função retorna o tipo de dados e o valor:

- $x = $y = $z = "Fruit";

<?php
$x = 5;
$y = 10;
?>

<?php
function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

<?php
  $X = 5;
function myTest() {
  global $x;
  $x = 5;
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $X</p>";
?>


<?php
$name = 'Linus';
echo '<h1>Hello ' .$name.'</h1>';
echo "<h1>Hello $name</h1>";
?>
*/

Em PHP, quando um valor booleano true é convertido para uma string (como acontece quando é usado com echo), 
ele é interpretado e exibido como o inteiro 1. O valor booleano false, por sua vez, seria exibido como uma string vazia.

<?php
  echo "Esta é uma string com \"aspas duplas\" dentro.";
?>

#\n = quebra de linha

/*definimos uma constante utilizando a função define(). Essa função recebe dois argumentos: 
o primeiro é o nome da constante (por convenção, em letras maiúsculas) e o segundo é o valor que 
será atribuído a ela. No nosso exemplo, definimos a constante MENSAGEM com o valor "Olá, mundo!"*/

Para imprimir o tipo de dado de uma variável em PHP, você pode utilizar a função gettype().
Esta função recebe uma variável como argumento e retorna uma string que representa o tipo de dado dessa variável.

PHP A Palavra-chave estática
Normalmente, quando uma função é concluída/executada, todas as suas variáveis são excluídas. No entanto, às vezes queremos que uma variável local NÃO seja excluída. Precisamos dele para um mais trabalho.

Para fazer isso, use o static palavra-chave quando você declara pela primeira vez o variável:

<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
?>

Dica: Se uma variável é criada sem um valor, é atribuído automaticamente um valor de NULL.