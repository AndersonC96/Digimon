<?php
    session_start();
    $is_logged_in = isset($_SESSION['user_id']);
    include '../templates/header.php';
?>
<div class="container-fluid">
    <h3 class="text-center">Encontre o seu Digimon!</h3>
    <?php if (!$is_logged_in): ?>
        <div class="alert alert-warning text-center">
            <p>Por favor, <a href="login.php">faça login</a> para acessar todas as funcionalidades, como favoritar Digimons.</p>
        </div>
    <?php endif; ?>
    <div class="row justify-content-center my-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h5 class="card-title">Buscar por Nome</h5>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nomeDigimon">Nome do Digimon:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeDigimon" name="txtDigimon" required>
                            <button type="submit" name="btn_pesq_nome" class="btn btn-primary ms-2">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h5 class="card-title">Buscar por Nível</h5>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nivelDigimon">Nível do Digimon:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nivelDigimon" name="txtNivel" required>
                            <button type="submit" name="btn_pesq_nivel" class="btn btn-primary ms-2">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        include '../src/search.php';
        include '../src/result.php';
    ?>
    <?php if ($is_logged_in): ?>
        <div class="text-center mt-4">
            <a href="favoritos.php" class="btn btn-success">Ver meus Digimons Favoritos</a>
        </div>
    <?php endif; ?>
</div>
<?php
    include '../templates/footer.php';
?>