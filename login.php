<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #caixa-login {
            background-image: url("images/user-login.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center top;
            padding-left: 60%;
            padding-top: 20%;
            padding-bottom: 10%;
            color: white;
            text-shadow: 2px 2px #696969;

        }

        #formulario {
            text-align: center;
            margin-top: 5%;

        }
    </style>
</head>
<body>
    <div id="caixa-login">
        <h1>Login corporativo</h1>
    </div>
    <div id="formulario">
        <form action="program/autentica.php" method="post">
            <input type="text" placeholder="usuário" id="usuario" name="txtusuario"><br>
            <input type="password" placeholder="senha" id="senha" name="txtsenha">
            <br><br><input type="submit" value="Entrar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>