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
        echo '<script>alert("Sucesso")</script>';            
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= index.php'>";   
    }   

?>