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

    // Verifica se a conta é admin
    if ($usuario["admin"] == 0) {
        echo '<script>window.location.href = "/painel";</script>';
    }

    // Registrar usuário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //error_reporting(E_ALL);
        //ini_set('display_errors', 1);

        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $adminUser = isset($_POST['admin_user']) ? 1 : 0;
        $paidUser = isset($_POST['paid_user']) ? 1 : 0;

        try {
            $sql = "INSERT INTO users (email, nome, admin, pago) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                echo 'Erro na preparação da instrução SQL. | '. $conn->error;
                exit;
            }

            $stmt->bind_param('ssss', $email, $nome, $adminUser, $paidUser);
            $stmt->execute();

            // Executar a instrução SQL
            if ($stmt->affected_rows > 0) {
                echo 'Registro realizado com sucesso!';
                echo '<script>window.location.href = "/admin/usuarios";</script>';
            } else {
                echo 'Erro ao registrar os dados.'; // $stmt->error
            }
        } catch (Exception $e) {
            echo 'Erro ao registrar os dados'; // $e->getMessage()
        }

        $stmt->close();
        $conn->close();
    }
}

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                <span class="text-center">Carregando sistema, por favor, aguarde...</span>
                            </div>
                        </center>

                        <div class="row" id="content">

                            <div class="col-6">
                                <a class="btn btn-falcon-success text-dark me-1 mb-2" href="../admin/usuarios" type="button">
                                    <span class="fas fa-user-friends"></span> Lista de usuários
                                </a>
                            </div>

                            <form class="row g-3" method="post" >

                                <div class="col-md-6">
                                    <label class="form-label" for="email">E-mail de acesso</label>
                                    <input class="form-control" id="email" name="email" type="email" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="nome">Nome do cliente</label>
                                    <input class="form-control" id="nome" name="nome" type="text" />
                                </div>

                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" id="admin_user" name="admin_user" type="checkbox" />
                                        <label class="form-check-label" for="admin_user" id="admin_user">Administrador</label>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" id="paid_user" name="paid_user" type="checkbox" />
                                        <label class="form-check-label" for="paid_user" id="paid_user">Plano Pago</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit"><span class="fas fa-user-check"></span> Registrar Usuário</button>
                                </div>

                            </form>

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