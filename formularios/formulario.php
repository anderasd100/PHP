<?php

if(isset($_GET['Nome'])){
    $Nome = htmlspecialchars(string: $_GET['Nome']);
    echo "Olá, seja bem-vindo $Nome";
}

?>

<html>
<head>
    <title>Meu formulário</title>
</head>
<body>
 <h2>Exemplo de formulário</h2>

 <form action="5_formularios.php" method="GET">
     <label for="Nome">Seu nome:</label>
     <input type="text" id="Nome" name="Nome">
     <button type="submit">Enviar</button>
</form>

</body>
</html>


