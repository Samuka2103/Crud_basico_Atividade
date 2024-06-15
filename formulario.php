<?php

    if(isset($_POST['submit'])){
    //     print_r('Nome:' . $_POST['nome']);
    //     print_r('<br>');
    //     print_r('Email:' . $_POST['email']);
    //     print_r('<br>');
    //     print_r('Senha:' . $_POST['senha']);
    
    include_once('confg.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Formato de email inválido");
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha]);
        echo "Usuário cadastrado com sucesso!";
    } catch (Exception $e) {
        if ($e->getCode() == 23000) {
            echo "Email já cadastrado.";
        } else {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 35px;
            background-color: rgb(136, 203, 203);
            padding: 15px;
        }
        .inputUser {
            display: block;
            margin-bottom: 10px;
        }
        .inputUser label {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="home.php">voltar</a>
    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend><b>formulario</b></legend>
                <div><br>
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>