<?php

    require_once 'conexao.php';

    if(isset($_POST['submit'])){
       
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $qtd_paginas = $_POST['qtd_paginas'];
        $editora = $_POST['editora'];
        $ano = $_POST['ano'];

        $resultado = mysqli_query($conectar, "INSERT INTO livros
        VALUES ( default, '$titulo', '$autor', '$qtd_paginas', '$editora', $ano)");
        if($resultado == true){
            echo '<script>alert("Sucesso")</script>'; 
            echo "<script>location.href='index.php'</script>";   
        }else {
            echo '<script>alert("Erro ao salvar")</script>'; 
            echo "<script>location.href='index.php'</script>";  
        }   
    }   

?>