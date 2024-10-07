<?php
    include '../templates/header.php';
?>
<div class="container-fluid">
    <h3 class="text-center">Encontre o seu digimon!</h3>
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
</div>
<?php
    include '../templates/footer.php';
?>