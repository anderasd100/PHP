<html>
<head>
    <title>
        <?php
        echo "Estudos PHP";
        ?>
</title>
</head>
<body>
<?php
//Chamado outro arquivo PHP:
//Podemos usar o REQUIRE ou INCLUDE
include './teste.php';
echo "<font color=red><h1>$Nome</h1></font>";
#echo gettype(['Amor', 12, 'Anderson', 125]);

/*Strings:
echo gettype("Arcturianos");

numbers:
echo gettype(77.66);
echo gettype(77);

booleans:
echo gettype(false);
echo gettype(true);

arrays:
echo gettype(['Amor', 12, 'Anderson', 125]);

object:

null */
//echo gettype(null);
?>

<?php
//Constante:

define ("NUMERO", 77);
if (defined("NUMERO")){
    echo "Foi definido";
}
?>

</body>
</html>