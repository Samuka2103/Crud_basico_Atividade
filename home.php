<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 30px;
            border-radius: 15px;
            border-radius: 25px;
            
        }
        a {
            text-decoration: none;
            color: aqua;
            border: 3px solid blue;
            border-radius: 10px;
            padding: 5px;
            
        }
        a:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Controle de usuarios</h1>
    <div class="box">
        <a href="lista_usuarios.php">Lista de usuarios</a>
        <a href="formulario.php">Cadastrar usuarios</a>
    </div>
  
    
</body>
</html>