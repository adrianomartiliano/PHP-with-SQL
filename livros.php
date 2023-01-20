<?php
require_once 'conexao.php';

//selecionando o banco de dados 
$db = mysqli_select_db($conectar, 'cadastro');

$sql = mysqli_query($conectar, "SELECT * FROM livros ORDER BY titulo") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );
?>

<table id="listaLivros">
    <tr class="tr-linha">
        <th>ID</th><th>Título</th><th>Autor</th>
    </tr>
    <?php
    //pecorrendo os registros da consulta. 
        while($aux = mysqli_fetch_assoc($sql)) {  
            echo "<tr><td>" .$aux["id"]. "</td><td>" .$aux["titulo"]. "</td><td>" .$aux["autor"]. "</td>"; 
        }  
    ?>
</table>