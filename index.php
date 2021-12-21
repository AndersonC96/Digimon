<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Digimon</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3d7779fa7f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/style.css">
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAA//+/AHx8fAD///8A+Pj4AM+JSwBPJwcA//+AAH5+PwCgUBAAzGgQAGUzBwBQKAgA/8SIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQkJAAAAAAAAAAAAAAAKAAsMCQkJBgUAAAAAAAkACgoACgoKCgAJCQAAAAoKCgoJCQkJCgoKCQAJAAAKCgoKCgkJCQkKCgsJCQkACgQECgAAAAAJCQoKCgANCQoEBAAHBwEHAAkEBAoKCQkKBAQABwcHBwAJBAQECgkAAAoKAAcDBwcACQkACgAJCQAKCgoACAcHAAkGAgoKCQkAAAAACgAAAAoJBAQECgkJAAAACgoKCgoKCwAACgAJAAAAAAALCgoLCgoKCgoKAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//AADwfwAA4A8AAAAHAAAAAwAAAAEAAAAAAAAAAAAAAAAAAAAAAACAAAAAwAAAAKABAADwAwAA/x8AAP//AAA=" rel="icon" type="image/x-icon"/>
        <script>
            if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </head>
    <body>
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
                include 'search/pesquisar_digimon.php';
                include 'search/result_pesq_digimon.php';
            ?>
        </div>
    </body>
</html>