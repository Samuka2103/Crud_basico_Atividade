<?php
include_once('confg.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $sqlUpdate = "UPDATE usuarios 
                  SET nome = :nome, senha = :senha, email = :email
                  WHERE id = :id";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    

    $result = $stmt->execute();
    
    if($result) {
 
        header('Location: lista_usuarios.php');
        exit();
    } else {
     
        echo "Erro ao atualizar usuário.";
    }
}
?>