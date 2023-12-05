<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
    include_once('cabecalho.php');
?>


        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-12">
                <form action="insere_cliente.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email do Cliente</label>
                        <input type="email" class="form-control" id="email_cadastro" name="email_cliente">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cidade do Cliente</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
