<?php
/*
 * Copyright (c) 15/07/23, 23:00.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

// Limpa o arquivo de log e mantém apenas os 10 registros mais recentes
function limparLog()
{
    $logFile = '../double_signals.txt';

    // Verifica se o arquivo de log existe
    if (file_exists($logFile)) {
        // Lê o conteúdo do arquivo de log
        $logContent = file_get_contents($logFile);

        // Quebra o conteúdo do log em linhas
        $lines = explode("\n", $logContent);

        // Verifica se existem mais de 10 registros no log
        if (count($lines) > 10) {
            // Mantém apenas os 10 registros mais recentes
            $lines = array_slice($lines, -10);

            // Junta as linhas novamente em uma única string
            $newLogContent = implode("\n", $lines);

            // Sobrescreve o arquivo de log com os registros mais recentes
            file_put_contents($logFile, $newLogContent);
        }
    }
}

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados recebidos via POST
    $id = $_POST['id'];
    $message = $_POST['message'];

    // Formata a mensagem como uma string com quebra de linha
    $data = json_encode([
            'id' => $id,
            'message' => $message
        ]) . "\n";

    // Salva a mensagem em um arquivo de log
    file_put_contents('../double_signals.txt', $data, FILE_APPEND);

    // Limpa o arquivo de log e mantém apenas os 10 registros mais recentes
    limparLog();
} else {
    // Retorna as mensagens armazenadas no arquivo de log
    $messages = file_get_contents('../double_signals.txt');
    echo $messages;
}