<?php
/*
Variáveis: Declare duas variáveis, $nome (string) e $idade (inteiro), atribua valores a elas e imprima uma mensagem 
concatenando essas variáveis (ex: "Meu nome é [nome] e eu tenho [idade] anos."). */

$nome = "Anderson";
$idade = 31;
echo "Meu nome é {$nome} e eu tenho {$idade} anos! ";
echo "<br>"; echo "<br>";
?>

<?php
/*
 Operações Aritméticas: Declare duas variáveis numéricas e realize as operações de adição, subtração, multiplicação e divisão, imprimindo os resultados de cada operação.

*/
$Num1 = 77;
$Num2 = 66;
echo "<font color='green'>Soma dos valores {$Num1} e {$Num2} é:</font>__________________ ", ($Num1 + $Num2);
echo "<br>";
echo "Subtração dos valores {$Num1} e {$Num2} é:_____________ ", ($Num1 - $Num2);
echo "<br>";
echo "Multiplicação dos valores {$Num1} e {$Num2} é:_________ ", ($Num1 * $Num2);
echo "<br>";
echo "Divisão dos valores {$Num1} e {$Num2} é:_______________ ", ($Num1 / $Num2);
echo "<br>";
?>

<?php
/*Comparação: Declare duas variáveis numéricas e utilize operadores de comparação (==, !=, >, <, >=, <=) para verificar se uma é maior, menor, 
igual ou diferente da outra. Imprima o resultado de cada comparação (verdadeiro ou falso). */
echo "<br>"; echo "<br>";
$Num1 = 77;
$Num2 = 66;
echo "####################################";
echo "<br>";
print"Número: {$Num1} e {$Num2}";
echo "<br>"; echo "<br>";
if ($Num1 == $Num2){
  echo "Verdadeiro";
}else{
    echo "Falso";
}
echo "<br>";
if ($Num1 != $Num2){
    echo "Verdadeiro";
  }else{
      echo "Falso";
  }
  echo "<br>";
  if ($Num1 > $Num2){
    echo "Verdadeiro";
  }else{
      echo "Falso";
  }
  echo "<br>";
  if ($Num1 < $Num2){
    echo "Verdadeiro";
  }else{
      echo "Falso";
  }
  echo "<br>";
  if ($Num1 >= $Num2){
    echo "Verdadeiro";
  }else{
      echo "Falso";
  }
  echo "<br>";
  if ($Num1 <= $Num2){
    echo "Verdadeiro";
  }else{
      echo "Falso";
  }
  echo "<br>";
  echo "####################################";
  echo "<br>";echo "<br>";
?>

<?php
/*Tipos de Dados: Crie variáveis de diferentes tipos: inteiro, float, string e booleano. Utilize a função var_dump() para exibir o tipo e o valor de cada variável. */

$Num1 = "Amor";
$Num2 = 10;
$Num3 = 77.8;
$Num4 = ["Paz", "Felicidade", "Carinho"];
$Num5 = null;

echo "<br>";
echo var_dump($Num1);
echo "<br>";
echo var_dump($Num2);
echo "<br>";
echo var_dump($Num3);
echo "<br>";
echo var_dump($Num4);
echo "<br>";
echo var_dump($Num5);
?>
<?php
echo "<br>";echo "<br>";
/*Constantes: Defina uma constante chamada PI com o valor de 3.14159. Em seguida, imprima o valor dessa constante. */
define("PI",3.14159);
echo PI;
?>

<?php
echo "<br>";echo "<br>";
/*Valor Nulo: Declare uma variável e atribua o valor null a ela. Verifique se a variável é nula utilizando a função is_null() e imprima uma mensagem indicando o resultado. */
$Num5 = null;
if  (is_null($Num5)) {
     echo "É Nulo";
}else{
    echo "Não é nulo";
}
echo "<br>"; echo "<br>";
?>
<?php
/*Manipulação de Strings: Declare uma variável com uma frase. Utilize funções de string como strlen() (para obter o comprimento), strtoupper() (para converter para maiúsculas)
 e strtolower() (para converter para minúsculas) e imprima os resultados. */

$Frase = "Amor e Paz que o mundo precisa!!!!!";
echo "A frase: {$Frase}<br> Possui o compprimento de: ", strlen($Frase);
echo '<br>'; echo '<br>';
$Frase = "Amor e Paz que o mundo precisa!!!!!";
echo "A frase: {$Frase}<br> Conversão para maiúsculas: ", strtoupper($Frase);

echo '<br>'; echo '<br>';
$Frase = "Amor e Paz que o mundo precisa!!!!!";
echo "A frase: {$Frase}<br> Conversão para minúsculas: ", strtolower($Frase);
echo "<br>"; echo "<br>";
?>

<?php
/*Conversão de Tipos: Declare uma variável string contendo um número (ex: "123"). Converta essa string para um inteiro utilizando a função intval() e,
 em seguida, adicione 5 ao resultado, imprimindo o valor final. */

$Var = "123";
intval($Var);
echo "{$Var}5";
?>

<?php $Zaretuna = 77; ?>