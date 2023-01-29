<?php

require_once 'conexao.php';
require_once 'menu.html';

$id = $_GET['id'];
$excluir = mysqli_query($conectar, "SELECT * FROM livros WHERE id=$id");
$livro = $excluir->fetch_row();

function teste(){
  echo "Testando chamada de function";
}

?>

<div class="card text-center">
  <div class="card-header">
    Tem certeza disso?
  </div>
  <div class="card-body">
    <p class="card-text">Excluir o livro "<?php echo $livro[1]; ?>"?</p>
    <a href="index.php" class="btn btn-secondary">Voltar</a>
    <a href=" <?php teste(); ?> " class="btn btn-danger">Excluir</a>
  </div>
</div>