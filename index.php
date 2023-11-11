<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" rel="images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #caixa{
            background-image: url("images/user-box.jpg");
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 100%;
            padding-left: 60%;
            padding-bottom: 10%;
            padding-top: 20%;

            color: white;
            text-shadow: 2px 2px #696969;
            margin-bottom: 5%;
        }
    </style>
</head>
<body>
    <div id="caixa">
        <h1>Cadastro de clientes</h1>
    </div>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome: </label><input type="text" size="30" id="nome" name="txtnome">
        <label for="email">E-mail: </label><input type="email" size="15" id="email" name="txtemail">
        <label for="telefone">Telefone: </label><input type="tel" size="13" id="telefone" name="txttelefone">
        <label for="tipodecliente">Tipo de cliente: </label>
        <select name="tipodecliente" id="tipodecliente">
            <option value="Tradicional">Tradicional</option>
            <option value="grandescontas">Grandes contas</option>
            <option value="VIP">VIP</option>
        </select>
        <label for="potencial">Cliente potencial</label><input  style="margin-left:5px" type="checkbox" id="potencial" name="potencial">
        <input type="submit" value="Cadastrar">
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>