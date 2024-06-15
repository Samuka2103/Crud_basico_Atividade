<?php
    if(!empty($_GET['id'])) {
        include_once('confg.php'); 

        $id = $_GET['id'];
        
        $sqlDelete = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        
        $resultDelete = $stmt->execute();

        
        if($resultDelete) {
            echo "Usuário deletado com sucesso.";
        } else {
            echo "Erro ao deletar o usuário.";
        }
    }

    header('Location: lista_usuarios.php'); 
    exit; 