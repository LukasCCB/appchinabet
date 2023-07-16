<?php
/*
 * Copyright (c) 15/07/23, 05:30.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

function welcomeUser() {
    date_default_timezone_set('America/Sao_Paulo');

    $currentHour = date('H');

    if ($currentHour >= 6 && $currentHour < 12) {
        $greeting = "Bom dia";
    } elseif ($currentHour >= 12 && $currentHour < 18) {
        $greeting = "Boa tarde";
    } else {
        $greeting = "Boa noite";
    }

    return $greeting;
}
