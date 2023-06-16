<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("caminho/para/sua/imagem.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
        }

        .container form {
            margin-top: 20px;
        }

        .container form input[type="text"],
        .container form input[type="password"],
        .container form input[type="login"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            outline: none;
        }

        .container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: none;
            background-color: #4CAF50;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form name="cadastro" action="cadastrado.php" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>
            <label for="login">Login:</label><br>
            <input type="login" name="login" id="login" required><br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha" required><br><br>
            <input type="submit" id="cadastrar" value="Cadastrar">
        </form>
    </div>
</body>
</html>

