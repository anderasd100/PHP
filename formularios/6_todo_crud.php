<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
//conexão para conectar no banco:

$host = "localhost";
$usuario = "anderson";
$senha = "123456";
$banco = "todo_list";

$conn = new mysqli(hostname: $host, username: $usuario, password: $senha, database: $banco);

//Validação para ver se irá conectar:

if ($conn->connect_error) {
    die("Falha na conexão com o banco. " .$conn->connect_error);
}
// criação da tarefa
if($_SERVER['REQUEST_METHOD'] === "POST" && isset( $_POST["descricao"])) {
   

    $descricao = $conn->real_escape_string(string: $_POST["descricao"]);

    $sqlInsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
    
    if($conn->query(query: $sqlInsert) === TRUE) {
        header("Location: 6_todo_crud.php");
        exit;
    }
    
}

// exclusão


//resgate das tarefas//////////////////////////////////////////
$sqlSelect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
$result = $conn->query(query: $sqlSelect);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc() ) {
    $tarefas[] = $row;
   }
}
///////////////////////////////////////////////////////////

$tarefas = [];
?>

<html>
<head><title>Todo List</title></head>
<body>
    <h1>Todo List</h1>

    <form action="6_todo-crud.php" method="POST">
        <input action="text" placeholder="Descrição da Tarefa" name="descricao" required>
        <button type="submit>">Adicionar</button>
    </form>

    <h2>Suas tarefas</h2>
    <?php if(!empty($tarefas)): ?>
         <ul>
          <?php foreach($tarefas as $tarefa): ?>
            <li>
                <?php echo $tarefa["descricao"]; ?>
            </li>
            <?php endforeach?>   
              
            </ul>
  
    <?php else: ?>
        <p>Não há tarefas.</p> 

   <?php endif; ?>

</body>
</html>