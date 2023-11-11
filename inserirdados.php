<?php include "program/conexao.php";

    $nome = $_POST["txtnome"];
    $email = $_POST["txtemail"];
    $telefone = $_POST["txttelefone"];
    $tipo = $_POST["tipodecliente"];
    $potencial = $_POST["potencial"];

    $statment = $conn->prepare("INSERT INTO clientes (cod, nome, telefone, email, tipo, potencial) VALUES (NULL, :nome, :telefone, :email, :tipo, :potencial)");

    $statment->bindValue(":nome",$nome);
    $statment->bindValue(":telefone",$telefone);
    $statment->bindValue(":email",$email);
    $statment->bindValue(":tipo",$tipo);
    $statment->bindValue(":potencial",$potencial);
    $statment->execute();

?>