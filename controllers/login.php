<?php
/*
 * Copyright (c) 09/07/23, 20:18.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

// Database
require_once(__DIR__ . '/../../config.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];

    // Conecta ao banco de dados
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
    }

    // Executa a consulta SQL para verificar se o e-mail existe
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        // Autenticação bem-sucedida, define a sessão como autenticada
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['last_activity'] = time();
        $_SESSION['expiration'] = 300; // Tempo de expiração da sessão em 5 minutos (300 segundos)

        echo 'success';
    } else {
        echo 'error';
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}