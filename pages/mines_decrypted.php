<?php
/*
 * Copyright (c) 15/07/23, 03:59.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

include("../template/layout.php");

session_start();

// Verifica se a sessão "logged_in" está definida e é verdadeira
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redireciona o usuário para a página de login
    header("Location: index.php");
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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        .mines-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 20px;
            align-items: center;
            height: fit-content;
            padding: 2rem;
        }

        .game-wrapper {
            position: relative;
        }

        .button-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .board {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 5px;
            margin-bottom: 0;
        }

        .board div {
            width: 28px;
            height: 28px;
        }

        .board img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: none;
        }

        .status-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 2;
            opacity: 5;
            transition: opacity 0.3s ease-in-out;
        }

        .status {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #ffffff;
            animation: fadeInOut 15s ease-in-out;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0;
            }
            15%, 20% {
                opacity: 1;
            }
        }

        .loader {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 6rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .loader:before,
        .loader:after {
            content: "";
            position: absolute;
            border-radius: 50%;
            animation: pulsOut 1.8s ease-in-out infinite;
            filter: drop-shadow(0 0 1rem rgba(255, 255, 255, 0.75));
        }

        .loader:before {
            width: 100%;
            padding-bottom: 100%;
            box-shadow: inset 0 0 0 1rem #fff;
            animation-name: pulsIn;
        }

        .loader:after {
            width: calc(100% - 2rem);
            padding-bottom: calc(100% - 2rem);
            box-shadow: 0 0 0 0 #fff;
        }

        @keyframes pulsIn {
            0% {
                box-shadow: inset 0 0 0 1rem #fff;
                opacity: 1;
            }
            50%, 100% {
                box-shadow: inset 0 0 0 0 #fff;
                opacity: 0;
            }
        }

        @keyframes pulsOut {
            0%, 50% {
                box-shadow: 0 0 0 0 #fff;
                opacity: 0;
            }
            100% {
                box-shadow: 0 0 0 1rem #fff;
                opacity: 1;
            }
        }

        .generate-opportunity {
            background-color: #FE9C4E;
            font-family: 'Poppins', sans-serif;
            height: 35px;
            width: 300px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            color: #090909;
            padding: 0.5rem 1rem;
            font-size: 12px;
            font-weight: bold;
            border-radius: 10px;
            border: none;
        }

        .generate-opportunity:hover {
            background-color: #FE9C4E;
            font-family: 'Poppins', sans-serif;
            height: 35px;
            width: 300px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            color: #090909;
            padding: 0.5rem 1rem;
            font-size: 12px;
            font-weight: bold;
            border-radius: 10px;
            border: none;
        }

        #info {
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 500px;
            text-align: left;
            width: fit-content;
            display: none;
        }

        #contador {
            margin-bottom: 20px;
            padding-top: 2px;
            padding-bottom: 2px;
            background-color: black;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            text-align: center;
            justify-content: center;
            width: 85px;
            color: white;
            border-radius: 20px;
        }

        iframe {
            height: 450px;
            width: 150px;
        }

    </style>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">

            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (!isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            <div class="content">
                <?php include("../template/top.php"); ?>

                <div class="card mb-3">

                    <div class="card-body">
                        <div class="row flex-between-center">
                            <div class="col-sm-auto mb-2 mb-sm-0">
                                <h4 class="mb-0 text-success">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href="../painel" type="button">
                                        <span class="far fa-arrow-alt-circle-left"></span>
                                    </a>
                                    Analisando sinais para <?=$nome_do_jogo??"Tiger777"?></h4>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card mb-3">

                    <div class="card-body">

                        <center>
                            <div class="loading-overlay" id="overlay-loading"> <div class="spinner"></div>
                                <span class="text-center">Carregando informações do jogo, por favor, aguarde...</span>
                            </div>
                        </center>

                        <div class="row" id="content">

                            <!-- System -->
                            <div class="mines-box">
                                <div id="game-wrapper" class="game-wrapper">
                                    <div id="board" class="board"></div>
                                    <img id="overlay" class="overlay">
                                    <div id="status-container" class="status-container">
                                        <span class="loader"></span>
                                        <p id="status" class="status"></p>
                                    </div>
                                </div>
                                <div class="button-wrapper">
                                    <p id="info"><b>Máximo:</b> 3 tentativas </p>
                                    <span id="contador" style="display: none;">30</span>
                                    <button id="generate-opportunity" class="generate-opportunity" onclick="delayedClick()">
                                        ANALISAR SINAIS
                                    </button>

                                    <br>
                                    <a href="https://tiger777.bet/mines" class="btn btn-primary px-5 px-sm-6" target="_blank" >
                                        ACESSAR JOGO <span class="far fa-arrow-alt-circle-right"></span>
                                    </a> <br>
                                    <span>Não tem conta na Tiger777.bet? <a href="https://tiger777.bet" target="_blank">Clique aqui para cadastrar</a></span>

                                </div>

                                <p id="info" class="info"></p>
                            </div>
                            <!-- #END System -->


                        </div>
                    </div>

                </div>

                <?php include("../template/credits.php"); ?>
            </div>


        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <script>
        const boardElement = document.getElementById("board");
        const overlayElement = document.getElementById("overlay");
        const statusElement = document.getElementById("status");
        const generateOpportunityButton = document.getElementById("generate-opportunity");

        function generateMinesBoard(diamond_positions) {
            const grid = Array.from({length: 25}, (_, i) =>
                diamond_positions.includes(i) ? "💎" : "💣"
            );
            return Array.from({length: 5}, (_, i) => grid.slice(i * 5, i * 5 + 5));
        }

        function renderBoard(board) {
            boardElement.innerHTML = board
                .map((row) =>
                    row
                        .map(
                            (cell) =>
                                `<div><img decoding="async" src="${cell === "💎"
                                    ? "../assets/img/jogos/mines/checked.png"
                                    : "../assets/img/jogos/mines/empty.png"
                                }" alt="${cell}"></div>`
                        )
                        .join("")
                )
                .join("");
        }

        function handleClickGenerateOpportunity() {

            statusElement.style.display = "block";
            statusElement.parentNode.style.opacity = "1";
            boardElement.style.opacity = "0";

            const diamond_positions = randomDiamondPositions();
            const board = generateMinesBoard(diamond_positions);
            renderBoard(board);

            setTimeout(() => {
                document.getElementById('info').style.display = "block";
                overlayElement.style.display = "none";
                statusElement.style.display = "none";
                statusElement.parentNode.style.opacity = "0";
                boardElement.style.opacity = "1";
            }, 5000);
        }

        function delayedClick() {
            let segundos = 30;
            const contador = document.getElementById('contador');

            contador.style.display = "block";
            const intervalId = setInterval(() => {
                segundos--;
                contador.textContent = segundos;
                if (segundos === 0) {
                    clearInterval(intervalId);
                    generateOpportunityButton.textContent = 'ANALISAR NOVOS SINAIS';
                    generateOpportunityButton.disabled = false;
                    contador.style.display = "none";
                    texto.textContent = "ENTRADA FINALIZADA";
                    contador.textContent = 30;
                }
            }, 1000);
            generateOpportunityButton.textContent = 'Aguarde...';
            generateOpportunityButton.disabled = true;
        }

        function randomDiamondPositions() {
            return Array.from({length: 5}, () => Math.floor(Math.random() * 25));
        }

        generateOpportunityButton.addEventListener("click", handleClickGenerateOpportunity);

        document.addEventListener("DOMContentLoaded", () => {
            handleClickGenerateOpportunity();
        });

    </script>

<?php include("../template/footer.php"); ?>