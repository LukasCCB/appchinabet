<?php
/*
 * Copyright (c) 15/07/23, 03:59.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

include("../template/layout.php");

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
                <?php include("../template/top.php");?>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row flex-between-center">
                            <div class="col-sm-auto mb-2 mb-sm-0">
                                <h4 class="mb-0 text-success">ESCOLHA UM JOGO PARA RECEBER OS SINAIS</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">

                        <center>
                            <div class="loading-overlay" id="overlay-loading"> <div class="spinner"></div>
                                <span class="text-center">Carregando lista de jogos, por favor, aguarde...</span>
                            </div>
                        </center>

                        <div class="row" id="content">

                            <!-- Originals -->
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between ">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/mines">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/mines.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-primary position-absolute mt-2 me-2 z-index-2 top-0 end-0">ORIGINALS</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/double">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/double.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-primary position-absolute mt-2 me-2 z-index-2 top-0 end-0">ORIGINALS</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>

                            <!-- Slots PGSoft -->
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/dragon-hatch">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/dragonhatch.jpg" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Dragon Hatch</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/dragon-tiger">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/dragontiger.jpg" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Dragon Tiger</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/fortune-mouse">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/fortunemouse.jpg" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Fortune Mouse</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/fortune-OX">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/fortune-ox.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Fortune OX</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/fortune-rabbit">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/fortune-rabbit.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Fortune Rabbit</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/fortune-tiger">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/fortune-tiger.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Fortune Tiger</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="jogos/muay-thai-champion">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/slots/muay-thai-champion.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-primary text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Muay Thai Cham...</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-success progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">ONLINE</div>
                                    </div>

                                </div>
                            </div>

                            <!-- Disabled -->
                            <div class="mb-3 col-md-2 col-lg-2 for-mobile">
                                <div class="border rounded-1 h-100 d-flex flex-column justify-content-between">
                                    <div class="overflow-hidden">
                                        <div class="position-relative rounded-top overflow-hidden">
                                            <a class="d-block" href="javascript:void(0)">
                                                <img class="img-fluid rounded-top" src="../../../assets/img/jogos/aviator.png" alt=""/>
                                            </a>
                                            <span class="badge rounded-pill bg-success text-white position-absolute mt-2 me-2 z-index-2 top-0 end-0">SLOTS</span>
                                            <span class="badge rounded-pill bg-danger text-dark position-absolute mt-2 me-6 z-index-2 top-0 end-0">Aviator</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-soft-danger progress-bar-striped progress-bar-animated" id="progress-toggle"
                                             role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">OFFLINE</div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-center">
                        <div class="text-warning">
                          *  Clique em cima da foto do jogo para receber os sinais.
                        </div>
                    </div>

                </div>

                <?php include("../template/credits.php");?>
            </div>

        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <script>
        window.addEventListener('load', function() {
            var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            modal.show();
        });
    </script>

    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1" id="staticBackdropLabel">Seja Bem-Vindo(a)</h4>
                        <p class="fs--2 mb-0">Aviso</p>
                    </div>
                    <div class="p-4">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="d-flex">

                                    <div class="flex-1">
                                        <h5 class="mb-2 fs-0 text-center">
                                            Você já possui cadastro na <b>Tiger777.bet</b>? Essa é a única plataforma que analisamos os sinais até o momento.
                                        </h5>

                                        <hr class="my-4" />

                                        <div class="text-center">
                                            <button  href="" class="btn btn-success text-white me-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">SIM, JÁ POSSUO</button >
                                            <a href="https://tiger777.bet/" target="_blank" class="btn btn-warning">NÃO, QUERO ME CADASTRAR</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../template/footer.php"); ?>