<?php
require_once 'conexao.php';

$sql = mysqli_query($conectar, "SELECT * FROM livros ORDER BY titulo");

?>

<link rel="stylesheet" href="css/livros.css">

<table class='lista-livros table table-striped '>
    <tr >
        <th>ID</th><th>Título</th><th colspan='3'>Autor</th>
    <tr>
    <?php 
        while($livro = $sql->fetch_object()){
            echo "
                <tr class='linha-lista'>
                     <td>" .$livro->id. "</td>
                     <td id='titulo-livro'>" .$livro->titulo. "</td>
                     <td id='autor-livro'>" .$livro->autor. "</td>
                     <form method='GET'>
                        <td><a href='edita.php?id=". $livro->id ."' class='btn btn-primary'>Editar</a></td>
                     </form>
                    <td><button type='button' class='btn btn-danger'>Excluir</button></td>
                </tr>";
        }
    ?>
</table>