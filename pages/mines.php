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
        function _0x1c0f(_0x450d8e,_0x18a559){const _0x50e3a3=_0x50e3();return _0x1c0f=function(_0x1c0f93,_0xa2cf07){_0x1c0f93=_0x1c0f93-0x17a;let _0x112d9e=_0x50e3a3[_0x1c0f93];return _0x112d9e;},_0x1c0f(_0x450d8e,_0x18a559);}const _0x1e54c3=_0x1c0f;(function(_0x86fa23,_0x493bfd){const _0x1677cc=_0x1c0f,_0x4e7e00=_0x86fa23();while(!![]){try{const _0x39c26e=parseInt(_0x1677cc(0x18e))/0x1+parseInt(_0x1677cc(0x17c))/0x2+parseInt(_0x1677cc(0x183))/0x3+-parseInt(_0x1677cc(0x19d))/0x4+-parseInt(_0x1677cc(0x18b))/0x5+parseInt(_0x1677cc(0x193))/0x6*(-parseInt(_0x1677cc(0x192))/0x7)+parseInt(_0x1677cc(0x18f))/0x8;if(_0x39c26e===_0x493bfd)break;else _0x4e7e00['push'](_0x4e7e00['shift']());}catch(_0x321323){_0x4e7e00['push'](_0x4e7e00['shift']());}}}(_0x50e3,0xbe15f));const boardElement=document[_0x1e54c3(0x18d)]('board'),overlayElement=document['getElementById'](_0x1e54c3(0x187)),statusElement=document[_0x1e54c3(0x18d)](_0x1e54c3(0x188)),generateOpportunityButton=document[_0x1e54c3(0x18d)]('generate-opportunity');function generateMinesBoard(_0x40e127){const _0x2096a3=_0x1e54c3,_0x26ba60=Array[_0x2096a3(0x194)]({'length':0x19},(_0xb5d9c7,_0x2f7906)=>_0x40e127[_0x2096a3(0x18c)](_0x2f7906)?'💎':'💣');return Array['from']({'length':0x5},(_0x42a489,_0x5d0121)=>_0x26ba60[_0x2096a3(0x19b)](_0x5d0121*0x5,_0x5d0121*0x5+0x5));}function renderBoard(_0x19e645){const _0x3f5f38=_0x1e54c3;boardElement['innerHTML']=_0x19e645[_0x3f5f38(0x190)](_0x5cf71f=>_0x5cf71f[_0x3f5f38(0x190)](_0xcef441=>_0x3f5f38(0x189)+(_0xcef441==='💎'?_0x3f5f38(0x17d):_0x3f5f38(0x17b))+_0x3f5f38(0x198)+_0xcef441+'\x22></div>')[_0x3f5f38(0x199)](''))[_0x3f5f38(0x199)]('');}function handleClickGenerateOpportunity(){const _0x4cc001=_0x1e54c3;statusElement[_0x4cc001(0x17e)][_0x4cc001(0x19c)]=_0x4cc001(0x181),statusElement['parentNode'][_0x4cc001(0x17e)][_0x4cc001(0x18a)]='1',boardElement[_0x4cc001(0x17e)][_0x4cc001(0x18a)]='0';const _0x4c98f0=randomDiamondPositions(),_0xe4a07a=generateMinesBoard(_0x4c98f0);renderBoard(_0xe4a07a),setTimeout(()=>{const _0x2d99a4=_0x4cc001;document['getElementById'](_0x2d99a4(0x191))['style'][_0x2d99a4(0x19c)]=_0x2d99a4(0x181),overlayElement[_0x2d99a4(0x17e)]['display']='none',statusElement['style'][_0x2d99a4(0x19c)]=_0x2d99a4(0x182),statusElement[_0x2d99a4(0x17f)][_0x2d99a4(0x17e)][_0x2d99a4(0x18a)]='0',boardElement[_0x2d99a4(0x17e)]['opacity']='1';},0x1388);}function delayedClick(){const _0x255adc=_0x1e54c3;let _0x4c4915=0x1e;const _0x477b45=document[_0x255adc(0x18d)](_0x255adc(0x185));_0x477b45[_0x255adc(0x17e)]['display']='block';const _0x59860a=setInterval(()=>{const _0x36444d=_0x255adc;_0x4c4915--,_0x477b45[_0x36444d(0x184)]=_0x4c4915,_0x4c4915===0x0&&(clearInterval(_0x59860a),generateOpportunityButton[_0x36444d(0x184)]=_0x36444d(0x17a),generateOpportunityButton[_0x36444d(0x195)]=![],_0x477b45[_0x36444d(0x17e)]['display']=_0x36444d(0x182),texto[_0x36444d(0x184)]=_0x36444d(0x196),_0x477b45[_0x36444d(0x184)]=0x1e);},0x3e8);generateOpportunityButton[_0x255adc(0x184)]=_0x255adc(0x186),generateOpportunityButton[_0x255adc(0x195)]=!![];}function randomDiamondPositions(){const _0x1ea129=_0x1e54c3;return Array[_0x1ea129(0x194)]({'length':0x5},()=>Math[_0x1ea129(0x19e)](Math[_0x1ea129(0x19a)]()*0x19));}function _0x50e3(){const _0x2042d6=['contador','Aguarde...','overlay','status','<div><img\x20decoding=\x22async\x22\x20src=\x22','opacity','5826160jxCnvA','includes','getElementById','1146224vTCFRZ','14830912MWtXgs','map','info','1210867RHhgve','18fbkxlG','from','disabled','ENTRADA\x20FINALIZADA','addEventListener','\x22\x20alt=\x22','join','random','slice','display','5593748KJDEgi','floor','ANALISAR\x20NOVOS\x20SINAIS','../assets/img/jogos/mines/empty.png','941636mmAuUO','../assets/img/jogos/mines/checked.png','style','parentNode','DOMContentLoaded','block','none','1170891FOtrTv','textContent'];_0x50e3=function(){return _0x2042d6;};return _0x50e3();}generateOpportunityButton[_0x1e54c3(0x197)]('click',handleClickGenerateOpportunity),document[_0x1e54c3(0x197)](_0x1e54c3(0x180),()=>{handleClickGenerateOpportunity();});
    </script>

<?php include("../template/footer.php"); ?>