<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION["codusuario"]; ?>!</h2>
    <p>Segue os usuários cadastrados.</p>
    <p><a href="relatorio.php">Gerar relatório</a></p>
    <?php
try {
    //Abrindo a conexão com o banco de dados
    include "conexao.php";
    
    // Defina o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL SELECT para todas as linhas do banco de dados
    $sql = "SELECT * FROM clientes";

    // Prepare a consulta
    $stmt = $conn->prepare($sql);

    // Execute a consulta
    $stmt->execute();

    // Recupere os resultados como um array associativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibindo os resultados
    foreach ($resultados as $row) {
        echo $row['cod'] . ' - ' . $row['nome'] . ' - '.$row['email'].$row['telefone'] . ' - ' .$row['tipo'] . ' - ' .$row['potencial'] . '<br>';
    }
} catch (PDOException $e) {
    // Lida com erros de banco de dados
    echo 'Erro: ' . $e->getMessage();
}

// Feche a conexão com o banco de dados
$pdo = null;
?>

</body>
</html>