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

                                    <div class="col-md-12r">
                                        <label class="form-label" for="entrada">Fazer entrada em</label>
                                        <input class="form-control text-center" id="entrada" type="text" value="🔴" disabled/>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="historico">Proteções</label>
                                        <input class="form-control" id="historico" type="text" value="Sem gale" disabled/>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="jogo">Observação</label>
                                        <div class="input-group has-validation">
                                            <input class="form-control" id="jogo" value="Cubra o banco ⚪" type="text"
                                                   aria-describedby="inputGroupPrepend" disabled/>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <hr>
                            <br><br>
                            <center>
                                <a href="https://tiger777.bet/double" class="btn btn-primary px-5 px-sm-6" target="_blank" >
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
        function _0x4b1f(){const _0x3d8571=['480DDiQNm','33845BsKAnd','822gzMVGG','addEventListener','ATENÇÃO','then','6347460UKpxci','DOMContentLoaded','querySelector','random','158283pHjQHs','catch','includes','https://appchinabet.com/double_signals.txt','display','#entrada','2722335YQUfbH','718720hjbmBz','split','style','value','sort','text','parse','map','2203300RWCTKS','length','2512120qRCiBy','push','trim','#atencao','none','json','ENTRADA\x20COFIRMADA!','result'];_0x4b1f=function(){return _0x3d8571;};return _0x4b1f();}const _0x3a8913=_0x4e15;function _0x4e15(_0x5e2cc8,_0x326b3e){const _0x4b1fb0=_0x4b1f();return _0x4e15=function(_0x4e1519,_0x1baad0){_0x4e1519=_0x4e1519-0x9a;let _0x2ca892=_0x4b1fb0[_0x4e1519];return _0x2ca892;},_0x4e15(_0x5e2cc8,_0x326b3e);}(function(_0x5d6b2f,_0x2ed8f1){const _0x298416=_0x4e15,_0x37c371=_0x5d6b2f();while(!![]){try{const _0x111bdc=parseInt(_0x298416(0xb9))/0x1+parseInt(_0x298416(0xa0))/0x2+parseInt(_0x298416(0xb8))/0x3+-parseInt(_0x298416(0x9e))/0x4+-parseInt(_0x298416(0xae))/0x5+parseInt(_0x298416(0xaa))/0x6*(parseInt(_0x298416(0xa9))/0x7)+-parseInt(_0x298416(0xa8))/0x8*(parseInt(_0x298416(0xb2))/0x9);if(_0x111bdc===_0x2ed8f1)break;else _0x37c371['push'](_0x37c371['shift']());}catch(_0x4ad242){_0x37c371['push'](_0x37c371['shift']());}}}(_0x4b1f,0xa359b),document[_0x3a8913(0xab)](_0x3a8913(0xaf),()=>{const _0x55401b=_0x3a8913,_0x58b4cd=document[_0x55401b(0xb0)]('#hackeando'),_0x3f178b=document[_0x55401b(0xb0)](_0x55401b(0xa3)),_0x2020a0=document[_0x55401b(0xb0)]('#confirmed'),_0x2a22d7=document['querySelector']('#entrar'),_0x476600=document[_0x55401b(0xb0)](_0x55401b(0xb7));let _0x443a27=null,_0x151fd8=null;function _0x34d224(_0x32c775){const _0x5f3234=_0x55401b,_0x21345c=['🔴','⚫'],_0x14b91d=[];for(let _0x4f54b6=0x0;_0x4f54b6<_0x32c775;_0x4f54b6++){const _0x1c03dd=Math['floor'](Math[_0x5f3234(0xb1)]()*_0x21345c[_0x5f3234(0x9f)]);_0x14b91d[_0x5f3234(0xa1)](_0x21345c[_0x1c03dd]);}return _0x14b91d;}async function _0x175ef1(){const _0x5729d0=_0x55401b;return await fetch(_0x5729d0(0xb5))[_0x5729d0(0xad)](_0x14e895=>_0x14e895[_0x5729d0(0x9b)]())[_0x5729d0(0xad)](_0x46c081=>{const _0x16335c=_0x5729d0,_0x15ffe1=_0x46c081['trim']()[_0x16335c(0xba)]('\x0a'),_0x58b095=_0x15ffe1[_0x16335c(0x9d)](_0x268134=>JSON[_0x16335c(0x9c)](_0x268134)),_0x412157=_0x58b095[_0x16335c(0x9a)]((_0x37868e,_0x204726)=>_0x204726['id']-_0x37868e['id']),_0xecae17=_0x412157[0x0]['id'];_0x58b4cd[_0x16335c(0xbb)][_0x16335c(0xb6)]='',_0x3f178b['style']['display']='none',_0x2020a0['style']['display']=_0x16335c(0xa4),_0x2a22d7[_0x16335c(0xbb)]['display']=_0x16335c(0xa4),_0x443a27!==_0xecae17&&(_0x443a27=_0xecae17,clearTimeout(_0x151fd8),_0x151fd8=setTimeout(()=>{const _0x36424f=_0x16335c;_0x443a27=null,_0x58b4cd[_0x36424f(0xbb)][_0x36424f(0xb6)]=_0x36424f(0xa4),_0x3f178b[_0x36424f(0xbb)][_0x36424f(0xb6)]=_0x36424f(0xa4),_0x2020a0[_0x36424f(0xbb)][_0x36424f(0xb6)]='',_0x2a22d7[_0x36424f(0xbb)][_0x36424f(0xb6)]='',_0x476600[_0x36424f(0xbc)]=_0x34d224(0x1),setTimeout(_0x175ef1,0x53fc);},0x55f0));})[_0x5729d0(0xb3)](_0x2dd81f=>{console['error']('Erro\x20ao\x20ler\x20o\x20arquivo:',_0x2dd81f),setTimeout(_0x175ef1,0x3e8);});}_0x175ef1();const _0x5dbd4a=_0x55401b(0xb5);let _0x2a60d0='';async function _0x38ad36(){const _0x2e8733=_0x55401b,_0x4e0f57=await fetch(_0x5dbd4a),_0x2eca1b=await _0x4e0f57[_0x2e8733(0xa5)](),_0x1e2842=_0x2eca1b[_0x2e8733(0xa7)][_0x2eca1b[_0x2e8733(0xa7)][_0x2e8733(0x9f)]-0x1]['channel_post']['text'];if(_0x2a60d0!==_0x1e2842){_0x2a60d0=_0x1e2842;if(_0x1e2842['includes'](_0x2e8733(0xa6))){const _0x1cd50b=_0x1e2842['split']('\x0a'),_0x172df1=_0x1cd50b['map'](_0x50abe6=>{const _0x1b0a72=_0x2e8733,[_0x477546,_0x439a8d]=_0x50abe6[_0x1b0a72(0xba)](':');return{'label':_0x477546?.['trim'](),'description':_0x439a8d?.[_0x1b0a72(0xa2)]()};});_0x58b4cd['style']['display']=_0x2e8733(0xa4),_0x3f178b[_0x2e8733(0xbb)]['display']=_0x2e8733(0xa4),_0x2020a0['style']['display']='',_0x2a22d7[_0x2e8733(0xbb)]['display']='',_0x476600[_0x2e8733(0xbc)]=_0x1cd50b[0x4]+'\x20'+_0x1cd50b[0x5]['toString']();}else{if(_0x1e2842[_0x2e8733(0xb4)]('ENTRADA\x20ENCERRADA'))_0x58b4cd['style'][_0x2e8733(0xb6)]='',_0x3f178b[_0x2e8733(0xbb)][_0x2e8733(0xb6)]='none',_0x2020a0[_0x2e8733(0xbb)]['display']=_0x2e8733(0xa4),_0x2a22d7[_0x2e8733(0xbb)][_0x2e8733(0xb6)]=_0x2e8733(0xa4),setTimeout(()=>{const _0x19927c=_0x2e8733;_0x58b4cd[_0x19927c(0xbb)][_0x19927c(0xb6)]='';},0x1770);else _0x1e2842[_0x2e8733(0xb4)](_0x2e8733(0xac))&&(_0x58b4cd[_0x2e8733(0xbb)]['display']='none',_0x3f178b['style']['display']='',_0x2020a0[_0x2e8733(0xbb)][_0x2e8733(0xb6)]=_0x2e8733(0xa4),_0x2a22d7[_0x2e8733(0xbb)][_0x2e8733(0xb6)]=_0x2e8733(0xa4));}}setTimeout(_0x38ad36,0x1388);}_0x38ad36();}));
    </script>

<?php include("../template/footer.php"); ?>