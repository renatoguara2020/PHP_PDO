<?php

try {
    $conexao = new PDO("mysql:host=localhost; dbname=crudsimples", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo('<h1 style="color:red">Conectou ao MySql !!!!!</h1>');
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();


    
}