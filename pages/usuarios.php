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
    header("Location: index");
    exit;
}

// Usuário logado
//if (isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == true) {
if ($_SESSION['logged_in'] == true) {

    // Verifica se a conta é admin
    if ($usuario["admin"] == 0) {
        echo '<script>window.location.href = "/painel";</script>';
    }

    // Listar usuarios
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
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
                                <a class="btn btn-falcon-primary me-1 mb-1" href="../painel" type="button">
                                    <span class="far fa-arrow-alt-circle-left"></span>
                                </a>
                                <h4 class="mb-0 text-success">Listar todas as contas de usuários.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">

                        <center>
                            <div class="loading-overlay" id="overlay-loading">
                                <div class="spinner"></div>
                                <span class="text-center">Carregando contas de usuários, por favor, aguarde...</span>
                            </div>
                        </center>

                        <div class="row" id="content">

                            <div class="col-6">
                                <a class="btn btn-falcon-success text-dark me-1 mb-2" href="../admin/usuario_adicionar" type="button">
                                    <span class="fas fa-user-plus"></span> Adicionar conta
                                </a>
                            </div>

                            <div id="tableExample2"
                                 data-list='{"valueNames":["id","email","name","admin","pago"],"page":10,"pagination":true}'>
                                <table class="table table-bordered table-striped fs--1">
                                    <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort" data-sort="id">#ID</th>
                                        <th class="sort" data-sort="email">E-mail</th>
                                        <th class="sort" data-sort="name">Nome</th>
                                        <th class="sort" data-sort="admin">Admin</th>
                                        <th class="sort" data-sort="pago">Pago</th>
                                        <!--th class="sort">Ação</th-->
                                    </tr>
                                    </thead>
                                    <tbody class="list">

                                    <?php
                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";

                                            echo "<td>".$row["id"]."</td>";
                                            echo "<td>".$row["email"]."</td>";
                                            echo "<td>".$row["nome"]."</td>";
                                            echo "<td>".($row["admin"] ? "Sim" : "Não")."</td>";
                                            echo "<td>".($row["pago"] ? "Sim" : "Não")."</td>";
                                            /*echo "<td>
                                                <a class='btn btn-warning me-1 mb-2' href='../admin/usuario_bloquear' type='button'>
                                                    <span class='fas fa-lock text-danger fs-1'></span>
                                                </a>
                                                
                                                <a class='btn btn-danger me-1 mb-2' href='../admin/usuario_desbloquear' type='button'>
                                                    <span class='fas fa-lock-open text-dark fs-1'></span>
                                                </a>
                                            </td>";*/

                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "Nenhuma conta de usuário encontrada.";
                                    }

                                    // Fechar a conexão com o banco de dados
                                    $conn->close();
                                    ?>

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                                    </button>
                                    <ul class="pagination mb-0"></ul>
                                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                            data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-center">
                        <div class="text-warning">
                            * Gerencie com cuidado!
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


<?php include("../template/footer.php"); ?>