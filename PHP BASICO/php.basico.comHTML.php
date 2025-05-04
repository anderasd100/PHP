<?php
// Include: se o arquivo estiver na mesma pasta basta usar: './' conforme o exemplo abaixo:

    #include ("./php.basico.php");

// Require: se o arquivo estiver na mesma pasta basta usar: './' conforme o exemplo abaixo:

    #require ("./php.basico.php");
    

// Strings : "" ''

// Numbers - Integers, Float

#echo gettype(12);
#echo gettype(12.5);

//Booleans
#echo gettype(false);
#echo gettype(true);

//Arrays
#echo gettype(['Amor','Carinho','Olá',97464,65161.316]);

//Object
#class Person{

#}

#echo gettype(new Person);

//Null
#echo gettype(null)
?>



