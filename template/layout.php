<?php
/*
 * Copyright (c) 15/07/23, 03:49.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

require_once("../config/global.php");

session_start();

// Verifica se a sessão "logged_in" está definida e é verdadeira
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redireciona o usuário para a página de login
    header("Location: /");
    exit;
}

// Usuário logado
//if (isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == true) {
if ($_SESSION['logged_in'] == true) {

    require_once(__DIR__ . '/../../config.php');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //$email = $_SESSION['email'];
    $email = $conn->real_escape_string($_SESSION['email']);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    $usuario = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active dark fontawesome-i2svg-complete">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?= SITE_NAME ?> | <?= ucfirst($requestUrl) ?></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
          rel="stylesheet">
    <link href="../../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @media screen and (max-width: 600px) {

            .for-mobile {
                max-width: 50%;
            }
        }
    </style>

    <style>
        .mb-3.col-md-2.col-lg-2 {
            transition: transform 0.3s ease;
        }

        .mb-3.col-md-2.col-lg-2:hover {
            transform: scale(1.1);
        }

        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Cor de fundo do overlay */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #ccc; /* Cor da borda do spinner */
            border-top-color: #333; /* Cor da borda superior do spinner */
            border-radius: 50%;
            animation: spin 1s infinite ease-in-out;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <style>
        /*body {
            overflow: hidden;
        }

        /* Estiliza a barra de rolagem (apenas em navegadores WebKit, como Chrome e Safari) */
        /*::-webkit-scrollbar {
            width: 0.5em;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
        }*/


        .bg-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(195deg, #f6f003 0%, #3bfc00 100%);
            filter: blur(150px);
        }

        .bg-gradient::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(195deg, #f6f003 0%, #3bfc00 100%);
            opacity: 0.5;
            animation: pulse 5s infinite;
        }

        .bg-gradient::after {
            content: "";
            position: absolute;
            top: 5%;
            left: 70%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(195deg, #f6f003 0%, #3bfc00 100%);
            opacity: 0.3;
            animation: pulse 6s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(0);
                opacity: 0.5;
            }
            50% {
                transform: scale(1);
                opacity: 0.2;
            }
            100% {
                transform: scale(0);
                opacity: 0.5;
            }
        }


        .background {
            background-image: url('../assets/img/background-img.jpg');
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: .6;
        }
        .navbar-glass {
            background-color: transparent;
            -webkit-box-shadow: 0 7px 14px 0 rgb(0 0 0 / 0%), 0 3px 6px 0 rgb(0 0 0 / 0%);
        }
        .card {
            background-color: transparent;
            /*-webkit-box-shadow: 0 7px 14px 0 rgb(0 0 0 / 0%), 0 3px 6px 0 rgb(0 0 0 / 0%);*/

            -webkit-box-shadow: 0 7px 14px 0 rgb(6 135 83), 0 3px 6px 0 rgb(28 62 50);
        }
        .bg-light {
            background-color: transparent !important;
            /*-webkit-box-shadow: 0 7px 14px 0 rgb(0 0 0 / 0%), 0 3px 6px 0 rgb(0 0 0 / 0%);*/

            -webkit-box-shadow: 0 7px 14px 0 rgb(6 135 83), 0 3px 6px 0 rgb(28 62 50);
        }
    </style>
</head>
<body class="background">
<div class="bg-gradient"></div>
