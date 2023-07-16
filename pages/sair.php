<?php
/*
 * Copyright (c) 15/07/23, 05:03.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */


session_start();

// Limpa tudo jesus
session_destroy();
session_unset();

// Inicia novamente
session_start();

header('Location: /');
die();

