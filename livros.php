<?php
require_once 'conexao.php';

//selecionando o banco de dados 
$db = mysqli_select_db($conectar, 'cadastro');

$sql = mysqli_query($conectar, "SELECT * FROM livros ORDER BY titulo") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );
?>

<link rel="stylesheet" href="css/livros.css">

<div id="lista-livro">
    <!-- <ul class="ul-linha">
        <li>ID</li><li>Título</li><li>Autor</li>
    </ul> -->
    <?php
    //pecorrendo os registros da consulta. 
        while($aux = mysqli_fetch_assoc($sql)) {  
            echo "
                <ul class='linha-lista'>
                    <li>" .$aux["id"]. "</li>
                    <li id='titulo-livro'>" .$aux["titulo"]. "</li>
                    <li id='autor-livro'>" .$aux["autor"]. "</li>
                    <form method='post'>
                        <input type='submit' id='btn-editar' value='Editar' name='editar'>
                        <input id='btn-excluir'  type='submit' value='Excluir' name='excluir'>
                    </form>
                </ul>"; 
        }  
        if(isset($_POST['excluir'])){
            // $excluindo = mysqli_query($conectar, "DELETE FROM livros WHERE id='$aux[id]'");
            // echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= index.php'>";
        }
    ?>
</div>