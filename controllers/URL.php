<?php
/*
 * Copyright (c) 15/07/23, 03:49.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

///////////////////////////////////////////
// Obtém o caminho da URL
$path = parse_url($requestUrl, PHP_URL_PATH);

// Obtém o último segmento do caminho da URL
$lastSegment = basename($path);

// Trata o último segmento removendo hífens e convertendo para maiúsculas
$nome_do_jogo = ucwords(str_replace('-', ' ', $lastSegment));
///////////////////////////////////////////


// Remove leading and trailing slashes
$requestUrl = trim($requestUrl, '/');

// Remove the directory name "pages" from the URL
$requestUrl = str_replace('pages/', '', $requestUrl);

// Remove the .php extension from the URL
$requestUrl = str_replace('.php', '', $requestUrl);

// Define the mapping of routes to files
$params = $_GET;
$routes=[];
include("../routes/routes.php");

// Check if the requested route exists in the mapping
if (array_key_exists($requestUrl, $routes)) {

    $file = $routes[$requestUrl];
    $filePath = __DIR__ . '/../pages/' . $file;

    // Check if the file exists
    if (file_exists($filePath)) {
        // Include the file to display the corresponding page
        extract($params);
        include $filePath;
    } else {
        // If the file doesn't exist, display the 404 page
        include __DIR__ . '/../pages/404.php';
    }
} else {
    // If the route doesn't exist, display the 404 page
    include __DIR__ . '/../pages/404.php';
}