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
    <p>Esta é a página de boas-vindas.</p>
    <p><a href="relatorio.php">Gerar relatório</a></p>
</body>
</html>