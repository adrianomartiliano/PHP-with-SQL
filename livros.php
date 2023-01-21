<?php
require_once 'conexao.php';

$sql = mysqli_query($conectar, "SELECT * FROM livros ORDER BY titulo") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );
?>

<link rel="stylesheet" href="css/livros.css">

<table class='lista-livros table table-striped '>
    <tr >
        <th>ID</th><th>Título</th><th colspan='3'>Autor</th>
    <tr>
    <?php
    //pecorrendo os registros da consulta. s
        while($aux = mysqli_fetch_assoc($sql)) {  
            echo "
                <tr class='linha-lista'>
                    <td>" .$aux["id"]. "</td>
                    <td id='titulo-livro'>" .$aux["titulo"]. "</td>
                    <td id='autor-livro'>" .$aux["autor"]. "</td>
                    <td><button type='button' class='btn btn-primary'>Editar</button></td>
                    <td><button onclick=\"<script>alert('teste');</script>\" type='button' class='btn btn-danger'>Excluir</button></td>
                </tr>"; 
        }  
        if(isset($_POST['excluir'])){
            // $excluindo = mysqli_query($conectar, "DELETE FROM livros WHERE id='$aux[id]'");
            // echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= index.php'>";
        }
    ?>
</table>