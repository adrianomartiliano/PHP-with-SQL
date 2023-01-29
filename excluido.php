<?php

    require_once 'conexao.php';

    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $qtd_paginas = $_POST['qtd_paginas'];
        $editora = $_POST['editora'];
        $ano = $_POST['ano'];

        $resultado = mysqli_query($conectar, "DELETE FROM livros WHERE id=$id");
        if($resultado == true){
            echo '<script>alert("Sucesso")</script>'; 
            echo "<script>location.href='index.php'</script>";   
        }else {
            echo '<script>alert("Erro ao salvar")</script>'; 
            echo "<script>location.href='index.php'</script>";  
        }   
    }   

?>