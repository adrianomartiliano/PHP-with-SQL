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
                     <form action='#exampleModal' method='Get'>
                        <td><button value='". $livro->id ."' type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Editar</button></td>
                        <td><button onclick=\"<script>alert('teste');</script>\" type='button' class='btn btn-danger'>Excluir</button></td>
                     <form >
                </tr>";
        }
    ?>
    <!-- Modal -->
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating campus-form" >
                        <input type="text" placeholder="Título" name="titulo" value="<?php echo $livro->titulo ?>" class="form-control" >
                        <label for="floatingInput">Título</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" placeholder="Autor" name="autor" class="form-control">
                        <label for="floatingInput">Autor</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" placeholder="Editora" name="editora" class="form-control">
                        <label for="floatingInput">Editora</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" placeholder="Quantidade de páginas" name="qtd_paginas" class="form-control">
                        <label for="floatingInput">Quantidade de Páginas</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" placeholder="Lançamento" name="ano" class="form-control">
                        <label for="floatingInput">Ano de Lançamento</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</table>