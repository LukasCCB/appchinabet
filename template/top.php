<?php
/*
 * Copyright (c) 15/07/23, 04:42.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */
?>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
            aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="/">
        <div class="d-flex align-items-center"><img class="me-1"
                                                    src="../../../assets/img/illustrations/falcon.png"
                                                    alt="" width="90"/>
        </div>
    </a>

    <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search text-success" disabled
                           placeholder="<?=welcomeUser()?>, <?=$usuario['nome']??"Visitante"?> 👋" value="<?=welcomeUser()?>, <?=$usuario['nome']??"Visitante"?> 👋" />
                </form>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">

        <?php if ($usuario["admin"] == 1){ ?>
        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill"
               href="../admin/usuarios">
                <span class="material-icons fs-5" data-fa-transform="shrink-7" style="font-size: 33px;">supervised_user_circle</span>
            </a>
        </li>
        <?php } ?>

        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill"
               href="sair">
                <span class="material-icons fs-5" data-fa-transform="shrink-7" style="font-size: 33px;">logout</span>
            </a>
        </li>


    </ul>
</nav>