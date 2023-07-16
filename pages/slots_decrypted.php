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

    // rewrite link game
    if ($nome_do_jogo === "Dragon Hatch") $id = "57";
    if ($nome_do_jogo === "Fortune Mouse") $id = "68";
    if ($nome_do_jogo === "Fortune Rabbit") $id = "1543462";
    if ($nome_do_jogo === "Fortune Tiger") $id = "126";
    if ($nome_do_jogo === "Muay Thai Champion") $id = "64";
}
?>


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
                            <div class="loading-overlay" id="overlay-loading">
                                <div class="spinner"></div>
                                <span class="text-center">Carregando sistema, por favor, aguarde...</span>
                            </div>
                        </center>

                        <div class="row" id="content">

                            <!-- System -->
                            <div id="hackeando" class="text-info text-center">
                                <img src="https://paysapp.com.br/wp-content/uploads/2023/06/civchoice-loading-gifs800x600.gif" width="5%"> Procurando sinais, aguarde...
                            </div>
                            <div id="atencao" class="text-info text-center">
                                <img src="https://paysapp.com.br/wp-content/uploads/2023/06/atencao.gif" width="5%"> Antenção, possivel entrada..
                            </div>
                            <div id="confirmed" class="text-info text-center">
                                <img src="https://paysapp.com.br/wp-content/uploads/2023/06/green-2.gif" width="5%"> Entrada confirmada!
                            </div>

                            <div id="entrar">
                                <form class="row g-3 needs-validation" novalidate="">

                                    <div class="col-md-4">
                                        <label class="form-label" for="entrada">Entradas</label>
                                        <input class="form-control" id="entrada" type="text" value="" disabled/>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="historico">Validade</label>
                                        <input class="form-control" id="historico" type="text" value="" disabled/>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="jogo">Jogo</label>
                                        <div class="input-group has-validation">
                                            <input class="form-control" id="jogo" value="<?=$nome_do_jogo??"Tiger777"?>" type="text"
                                                   aria-describedby="inputGroupPrepend" disabled/>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <hr>
                            <br><br>
                            <center>
                                <a href="https://tiger777.bet/slots/pgsoft/<?=$id?>" class="btn btn-primary px-5 px-sm-6" target="_blank" >
                                    ACESSAR JOGO <span class="far fa-arrow-alt-circle-right"></span>
                                </a> <br><br>
                                <span>Não tem conta na Tiger777.bet? <a href="https://tiger777.bet" target="_blank">Clique aqui para cadastrar</a></span>
                            </center>
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


    <script src='http://paysapp.com.br/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

        const hackeando = document.querySelector('#hackeando');
        const atencao = document.querySelector('#atencao');
        const confirmed = document.querySelector('#confirmed');
        const entrar = document.querySelector('#entrar');

        const entrada = document.querySelector('#entrada');
        const historico = document.querySelector('#historico');
        //const jogo = document.querySelector('#jogo');

        const apiUrl = "https://api.telegram.org/bot6033207942:AAGJ5bgEFq-2dqRlbaTsRBg3c2yN4RymZd0/getUpdates?offset=-1";
        let lastMessage = "";

        async function fetchUpdates() {
            const response = await fetch(apiUrl);
            const data = await response.json();
            const message = data.result[data.result.length - 1].channel_post.text;

            //console.log(message);

            if (lastMessage !== message) {
                lastMessage = message;

                if (message.includes("ENTRADA COFIRMADA!")) {
                    const lines = message.split('\n');
                    const elements = lines.map((line) => {
                        const [label, description] = line.split(':');
                        return {label: label?.trim(), description: description?.trim()};
                    });

                    /////////////////////////////////////////////////////////
                    /*console.log(lines[0]); // 🔔 ENTRADA COFIRMADA! 🔔
                    console.log(lines[1]); // 🐯 Fortune Tiger
                    console.log(lines[2]); // 🕗 Validade: 3 minutos.
                    console.log(lines[4]); // 7x normal
                    console.log(lines[5]); // 5x Turbo*/
                    /////////////////////////////////////////////////////////

                    hackeando.style.display = 'none';
                    atencao.style.display = 'none';
                    confirmed.style.display = '';
                    entrar.style.display = '';

                    entrada.value = lines[4] + " " + lines[5].toString();
                    historico.value  = elements[2].description;
                    //jogo.value = "🐯 Fortune Tiger";

                } else if (message.includes("ENTRADA ENCERRADA")) {

                    hackeando.style.display = '';
                    atencao.style.display = 'none';
                    confirmed.style.display = 'none';
                    entrar.style.display = 'none';

                    setTimeout(() => {
                        hackeando.style.display = '';
                    }, 6000)

                } else if (message.includes("ATENÇÃO")) {

                    hackeando.style.display = 'none';
                    atencao.style.display = '';
                    confirmed.style.display = 'none';
                    entrar.style.display = 'none';
                }

            }

            setTimeout(fetchUpdates, 5000);
        }

            fetchUpdates();
        });

    </script>

<?php include("../template/footer.php"); ?>