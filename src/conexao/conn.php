<?php

// Declarar as variaveis necessarias para gerar a minha conexão com o Banco de Dados...

$hostname = "f30-preview.awardspace.net";
$dbname = "3769094_pwyurip3";
$username = "3769094_pwyurip3";
$password = "3769094_pwyurip3";

try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexão realizada com sucesso!';
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}