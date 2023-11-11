<?php
    session_start();
    global $conn;

    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "bdclientes";

        $conn = new PDO("mysql:dbname=$database; host=$servername", $username, $password);
        //echo "conectou";
    } catch (PDOException $erro) {

        echo "O erro".$erro->getMessage()."ocorreu.";
    }

?>