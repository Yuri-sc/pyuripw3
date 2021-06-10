<?php

// Declarar as variaveis necessarias para gerar a minha conexão com o Banco de Dados...

$hostname = "sql108.byetcluster.com";
$dbname = "epiz_28839504_library";
$username = "epiz_28839504";
$password = "ptBdtnNrkKUDLR0";

try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão realizada com sucesso!';
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}