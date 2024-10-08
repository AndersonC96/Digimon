<?php
    session_start();
    include '../templates/header.php';
?>
<div class="container-fluid">
    <h3 class="text-center">Encontre o seu Digimon!</h3>
    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm">
                <h5 class="card-title">Pesquisar Digimon</h5>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="nomeDigimon" class="form-label">Nome do Digimon:</label>
                            <input type="text" class="form-control" id="nomeDigimon" name="txtDigimon" placeholder="Ex: Agumon">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nivelDigimon" class="form-label">Nível do Digimon:</label>
                            <select class="form-select" id="nivelDigimon" name="txtNivel">
                                <option value="">Todos</option>
                                <option value="Armor">Armor</option>
                                <option value="Adult">Adult</option>
                                <option value="Baby I">Baby I</option>
                                <option value="Baby II">Baby II</option>
                                <option value="Child">Child</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Perfect">Perfect</option>
                                <option value="Ultimate">Ultimate</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tipoDigimon" class="form-label">Tipo do Digimon:</label>
                            <select class="form-select" id="tipoDigimon" name="txtTipo">
                                <option value="">Todos</option>
                                <option value="Data">Data</option>
                                <option value="Free">Free</option>
                                <option value="No Data">No Data</option>
                                <option value="Unknown">Unknown</option>
                                <option value="Vaccine">Vaccine</option>
                                <option value="Variable">Variable</option>
                                <option value="Virus">Virus</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="btn_pesquisa" class="btn btn-primary">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        include '../src/search.php';
    ?>
</div>
<?php
    include '../templates/footer.php';
?>