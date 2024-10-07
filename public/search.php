<?php
    include '../config/config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_pesquisa'])) {
        $nome = isset($_POST['txtDigimon']) ? $_POST['txtDigimon'] : '';
        $nivel = isset($_POST['txtNivel']) ? $_POST['txtNivel'] : '';
        $tipo = isset($_POST['txtTipo']) ? $_POST['txtTipo'] : '';
        $apiUrl = $apiConfig['digimon_api_url'];
        if (!empty($nome)) {
            $apiUrl .= '/name/' . urlencode($nome);
        }
        $response = file_get_contents($apiUrl);
        $digimons = json_decode($response, true);
        if (!empty($nivel)) {
            $digimons = array_filter($digimons, function ($digimon) use ($nivel) {
                return $digimon['level'] === $nivel;
            });
        }
        if (!empty($tipo)) {
            $digimons = array_filter($digimons, function ($digimon) use ($tipo) {
                return $digimon['type'] === $tipo;
            });
        }
        if (!empty($digimons)) {
            echo "<div class='container mt-4'>";
            echo "<h4>Resultados da Pesquisa:</h4>";
            echo "<ul class='list-group'>";
            foreach ($digimons as $digimon) {
                echo "<li class='list-group-item'>";
                echo "<strong>Nome:</strong> " . $digimon['name'] . "<br>";
                echo "<strong>Nível:</strong> " . $digimon['level'] . "<br>";
                echo "<strong>Tipo:</strong> " . $digimon['type'] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</div>";
        } else {
            echo "<div class='alert alert-warning'>Nenhum Digimon encontrado com os filtros aplicados.</div>";
        }
    }