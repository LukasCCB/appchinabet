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
        function _0x3d96(_0x3b3894,_0x1e9e48){const _0x5a712a=_0x5a71();return _0x3d96=function(_0x3d96b5,_0x24394e){_0x3d96b5=_0x3d96b5-0x106;let _0x2a98f4=_0x5a712a[_0x3d96b5];return _0x2a98f4;},_0x3d96(_0x3b3894,_0x1e9e48);}const _0x858c8b=_0x3d96;function _0x5a71(){const _0x5b3c4f=['none','#atencao','includes','#hackeando','addEventListener','description','#confirmed','json','result','18YpToyC','ENTRADA\x20COFIRMADA!','ATENÇÃO','14OItEdK','4549956pQBHQx','128958tVHzlA','toString','trim','value','channel_post','text','2abrGqS','255704GwuATn','11HnARMO','1064aEYAOH','18uBmdaC','display','querySelector','683835vtzezI','1206336jMuhpy','#entrar','833710WVkkuT','style','ENTRADA\x20ENCERRADA','split'];_0x5a71=function(){return _0x5b3c4f;};return _0x5a71();}(function(_0xd424a9,_0x1f6b35){const _0x489d8d=_0x3d96,_0x1e05f4=_0xd424a9();while(!![]){try{const _0x5d1f4b=-parseInt(_0x489d8d(0x121))/0x1*(parseInt(_0x489d8d(0x11b))/0x2)+parseInt(_0x489d8d(0x116))/0x3*(parseInt(_0x489d8d(0x122))/0x4)+parseInt(_0x489d8d(0x106))/0x5+-parseInt(_0x489d8d(0x107))/0x6*(parseInt(_0x489d8d(0x119))/0x7)+-parseInt(_0x489d8d(0x124))/0x8+parseInt(_0x489d8d(0x125))/0x9*(-parseInt(_0x489d8d(0x109))/0xa)+-parseInt(_0x489d8d(0x123))/0xb*(-parseInt(_0x489d8d(0x11a))/0xc);if(_0x5d1f4b===_0x1f6b35)break;else _0x1e05f4['push'](_0x1e05f4['shift']());}catch(_0x2abe97){_0x1e05f4['push'](_0x1e05f4['shift']());}}}(_0x5a71,0x31345),document[_0x858c8b(0x111)]('DOMContentLoaded',()=>{const _0x41ac55=_0x858c8b,_0x36891f=document['querySelector'](_0x41ac55(0x110)),_0x58cc48=document[_0x41ac55(0x127)](_0x41ac55(0x10e)),_0x2e8e8b=document['querySelector'](_0x41ac55(0x113)),_0x231968=document[_0x41ac55(0x127)](_0x41ac55(0x108)),_0x2a0cc4=document[_0x41ac55(0x127)]('#entrada'),_0x44c841=document[_0x41ac55(0x127)]('#historico'),_0x50ce18='https://api.telegram.org/bot6033207942:AAGJ5bgEFq-2dqRlbaTsRBg3c2yN4RymZd0/getUpdates?offset=-1';let _0x5d6391='';async function _0x2bced8(){const _0x1abd0d=_0x41ac55,_0x1c4321=await fetch(_0x50ce18),_0x76ebda=await _0x1c4321[_0x1abd0d(0x114)](),_0x38e3c3=_0x76ebda[_0x1abd0d(0x115)][_0x76ebda[_0x1abd0d(0x115)]['length']-0x1][_0x1abd0d(0x11f)][_0x1abd0d(0x120)];if(_0x5d6391!==_0x38e3c3){_0x5d6391=_0x38e3c3;if(_0x38e3c3[_0x1abd0d(0x10f)](_0x1abd0d(0x117))){const _0x164442=_0x38e3c3[_0x1abd0d(0x10c)]('\x0a'),_0x1cf60d=_0x164442['map'](_0xbc595=>{const _0xdf8be3=_0x1abd0d,[_0x3f4b2c,_0x5e0229]=_0xbc595[_0xdf8be3(0x10c)](':');return{'label':_0x3f4b2c?.['trim'](),'description':_0x5e0229?.[_0xdf8be3(0x11d)]()};});_0x36891f[_0x1abd0d(0x10a)]['display']=_0x1abd0d(0x10d),_0x58cc48['style']['display']=_0x1abd0d(0x10d),_0x2e8e8b[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]='',_0x231968[_0x1abd0d(0x10a)]['display']='',_0x2a0cc4[_0x1abd0d(0x11e)]=_0x164442[0x4]+'\x20'+_0x164442[0x5][_0x1abd0d(0x11c)](),_0x44c841[_0x1abd0d(0x11e)]=_0x1cf60d[0x2][_0x1abd0d(0x112)];}else{if(_0x38e3c3[_0x1abd0d(0x10f)](_0x1abd0d(0x10b)))_0x36891f[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]='',_0x58cc48[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]=_0x1abd0d(0x10d),_0x2e8e8b[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]=_0x1abd0d(0x10d),_0x231968['style'][_0x1abd0d(0x126)]='none',setTimeout(()=>{_0x36891f['style']['display']='';},0x1770);else _0x38e3c3[_0x1abd0d(0x10f)](_0x1abd0d(0x118))&&(_0x36891f[_0x1abd0d(0x10a)]['display']=_0x1abd0d(0x10d),_0x58cc48[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]='',_0x2e8e8b[_0x1abd0d(0x10a)][_0x1abd0d(0x126)]=_0x1abd0d(0x10d),_0x231968[_0x1abd0d(0x10a)]['display']=_0x1abd0d(0x10d));}}setTimeout(_0x2bced8,0x1388);}_0x2bced8();}));

    </script>

<?php include("../template/footer.php"); ?>