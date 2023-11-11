<?php

    if(isset($_POST["txtusuario"]) && !empty($_POST["txtusuario"]) && !empty($_POST["txtsenha"])){

        require "conexao.php";
        require "../ClasseUsuario.php";
    

    $usuario = $_POST["txtusuario"];
    $senha = $_POST["txtsenha"];

    $u = new Usuario($usuario, $senha); 


    if($u->login($usuario, $senha) == true){
            header("Location: welcome.php");
    }else{
            header("Location: index.php");
        }
    }
    
?>