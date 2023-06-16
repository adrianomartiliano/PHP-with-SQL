<?php

    $local = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'biblioteca';

    $conectar = new mysqli($local, $user, $senha, $banco);

    if ($conectar->connect_errno){
        echo "Erro ao se conectar com o banco de dados: ".$conectar->connect_error;
    }

?>