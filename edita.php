
<link rel="stylesheet" href="css/form.css">     
<?php

    require_once 'conexao.php';
    require_once 'menu.html';

    $id = $_GET['id'];
    $edita = mysqli_query($conectar, "SELECT * FROM livro WHERE id=$id");
    $livro = $edita->fetch_row();
    
    echo "

        <form action='editacadastro.php' method='post'>
        <input type='radio' value='". $id ."' name='id' checked style='display:none;'>
        <div class='form-floating campus-form' >
            <input value='". $livro[1] ."' type='text' placeholder='Título' name='titulo' class='form-control' required >
            <label for='floatingInput'>Título</label>
        </div>
        <div class='form-floating'>
            <input value='". $livro[2]."' type='text' placeholder='Autor' name='autor' class='form-control' required>
            <label for='floatingInput'>Autor</label>
        </div>
        <div class='form-floating'>
            <input value='". $livro[4] ."' type='text' placeholder='Editora' name='editora' class='form-control' required>
            <label for='floatingInput'>Editora</label>
        </div>
        <div class='form-floating'>
            <input value='". $livro[3] ."' type='number' placeholder='Quantidade de páginas' name='qtd_paginas' class='form-control' required>
            <label for='floatingInput'>Quantidade de Páginas</label>
        </div>
        <div class='form-floating'>
            <input value='". $livro[5] ."' type='text' placeholder='Lançamento' name='ano' class='form-control' required>
            <label for='floatingInput'>Ano de Lançamento</label>
        </div>
        <div id='btn-salvar-form'>
            <input type='submit' name='submit' value='Salvar' class='form-control btn btn-success btn-edita' >
            <a href='index.php' class='form-control btn btn-secondary btn-edita' >Voltar</a>
        </div>
        
    </form>

    ";

?>