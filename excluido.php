<?php

    require_once 'conexao.php';
    
    $id = $_GET['id'];

    $resultado = mysqli_query($conectar, "DELETE FROM livros WHERE id=$id");

    if($resultado == true){
        echo '<script>alert("EXCLUÍDO!")</script>'; 
        echo "<script>location.href='index.php'</script>";   
    }else {
            echo '<script>alert("Erro ao exclúir")</script>'; 
            echo "<script>location.href='index.php'</script>";           
    }   
   

?>