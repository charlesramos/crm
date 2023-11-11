<?php
class Usuario {
    public function login($usuario, $senha){
        global $conn;
        $sql = "SELECT * FROM tabelafuncionarios WHERE usuario = :usuario AND senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue("usuario",$usuario);
        $sql->bindValue("senha",$senha);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION["codusuario"] = $dado["cod"];
            return true;
        } else {
            return false;
        }
    }
}
?>