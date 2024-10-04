<?php
    include '../templates/header.php';
?>
<div class="container-fluid">
    <h3>Encontre o seu digimon!</h3>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3 pesqNome">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Nome do digimon: </label>
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" name="txtDigimon" required>
                                <input type="submit" name="btn_pesq_nome" class="btn btn-primary" value="Pesquisar">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 pesqNivel">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Nível do digimon:</label>
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" name="txtNivel" required>
                                <input type="submit" name="btn_pesq_nivel" class="btn btn-primary" value="Pesquisar">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <?php
        include '../src/search.php';
        include '../src/result.php';
    ?>
</div>
<?php
    include '../templates/footer.php';
?>