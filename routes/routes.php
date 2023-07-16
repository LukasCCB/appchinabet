<?php
/*
 * Copyright (c) 15/07/23, 04:08.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

// ROUTE NAME | file name in "pages" folder.
$routes = [

    // User Authentication
    '' => '../index.php',
    'login' => '../index.php',
    'entrar' => '../index.php',

    // User has authenticated
    'painel' => 'painel.php',
    'sair' => 'sair.php',

    // Administration page
    'admin/usuarios' => 'usuarios.php',
    'admin/usuario_adicionar' => 'user_add.php',
    'admin/usuario_bloquear' => 'user_block.php',

    // Signals page
    'jogos/mines' => 'mines.php',
    'jogos/double' => 'double.php',
    'jogos/dragon-hatch' => 'slots.php',
    'jogos/dragon-tiger' => 'slots.php',
    'jogos/fortune-mouse' => 'slots.php',
    'jogos/fortune-OX' => 'slots.php',
    'jogos/fortune-rabbit' => 'slots.php',
    'jogos/fortune-tiger' => 'slots.php',
    'jogos/muay-thai-champion' => 'slots.php',

    // API
    'api/double' => 'api_double.php',
];