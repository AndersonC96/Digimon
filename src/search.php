<?php
    include '../config/config.php';
    $itemsPerPage = 6;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $itemsPerPage;
    $nome = isset($_POST['txtDigimon']) ? $_POST['txtDigimon'] : (isset($_GET['txtDigimon']) ? $_GET['txtDigimon'] : '');
    $nivel = isset($_POST['txtNivel']) ? $_POST['txtNivel'] : (isset($_GET['txtNivel']) ? $_GET['txtNivel'] : '');
    $tipo = isset($_POST['txtTipo']) ? $_POST['txtTipo'] : (isset($_GET['txtTipo']) ? $_GET['txtTipo'] : '');
    $totalPages = 1;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' || !empty($nome) || !empty($nivel) || !empty($tipo)) {
        if (!empty($nome)) {
            $apiUrl = $apiConfig['digimon_api_url'] . '?name=' . urlencode($nome);
            $response = @file_get_contents($apiUrl);
            if ($response === false) {
                echo "<div class='alert alert-danger'>Erro ao acessar a API. Tente novamente mais tarde.</div>";
                exit();
            }
            $data = json_decode($response, true);
            if (!isset($data['content']) || empty($data['content'])) {
                echo "<div class='alert alert-warning'>Nenhum Digimon encontrado com esse nome.</div>";
                exit();
            }
            $digimons = $data['content'];
        }
        if (!empty($nivel)) {
            $apiUrl = $apiConfig['digimon_api_url'] . '?level=' . urlencode($nivel) . '&pageSize=' . $itemsPerPage . '&page=' . ($page - 1);
            $response = @file_get_contents($apiUrl);
            if ($response === false) {
                echo "<div class='alert alert-danger'>Erro ao acessar a API. Tente novamente mais tarde.</div>";
                exit();
            }
            $data = json_decode($response, true);
            if (!isset($data['content']) || empty($data['content'])) {
                echo "<div class='alert alert-warning'>Nenhum Digimon encontrado com o nível especificado.</div>";
                exit();
            }
            $digimons = $data['content'];
            $totalPages = $data['pageable']['totalPages'];
        }
        if (!empty($tipo)) {
            $apiUrl = $apiConfig['digimon_api_url'] . '?attribute=' . urlencode($tipo) . '&pageSize=' . $itemsPerPage . '&page=' . ($page - 1);
            $response = @file_get_contents($apiUrl);
            if ($response === false) {
                echo "<div class='alert alert-danger'>Erro ao acessar a API. Tente novamente mais tarde.</div>";
                exit();
            }
            $data = json_decode($response, true);
            if (!isset($data['content']) || empty($data['content'])) {
                echo "<div class='alert alert-warning'>Nenhum Digimon encontrado com o atributo especificado.</div>";
                exit();
            }
            $digimons = $data['content'];
            $totalPages = $data['pageable']['totalPages'];
        }
    } else {
        $apiUrl = $apiConfig['digimon_api_url'] . '?pageSize=' . $itemsPerPage . '&page=' . ($page - 1);
        $response = @file_get_contents($apiUrl);
        if ($response === false) {
            echo "<div class='alert alert-danger'>Erro ao acessar a API. Tente novamente mais tarde.</div>";
            exit();
        }
        $data = json_decode($response, true);
        if (!isset($data['content']) || empty($data['content'])) {
            echo "<div class='alert alert-warning'>Nenhum Digimon encontrado.</div>";
            exit();
        }
        $digimons = $data['content'];
        $totalPages = $data['pageable']['totalPages'];
    }
    echo "<div class='container mt-4'>";
    echo "<h4>Resultados da Pesquisa:</h4>";
    echo "<div class='row row-cols-1 row-cols-md-3 g-4'>";
    if (empty($digimons)) {
        echo "<div class='alert alert-warning'>Nenhum Digimon encontrado com o critério de pesquisa especificado.</div>";
    } else {
        foreach ($digimons as $digimon) {
            echo "<div class='col'>";
            echo "<div class='card h-100'>";
            echo "<img src='" . htmlspecialchars($digimon['image']) . "' class='card-img-top' alt='" . htmlspecialchars($digimon['name']) . "'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . htmlspecialchars($digimon['name']) . "</h5>";
            echo "<a href='" . htmlspecialchars($digimon['href']) . "' target='_blank' class='btn btn-primary'>Ver mais</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
    echo "</div>";
    if ($totalPages > 1) {
        echo "<nav aria-label='Navegação da página'>";
        echo "<ul class='pagination justify-content-center mt-4'>";
        $urlParams = http_build_query([
            'txtDigimon' => $nome,
            'txtNivel' => $nivel,
            'txtTipo' => $tipo
        ]);
        if ($page > 1) {
            $prevPage = $page - 1;
            echo "<li class='page-item'><a class='page-link' href='?page=$prevPage&$urlParams'>Anterior</a></li>";
        }
        $start = max(1, $page - 2);
        $end = min($totalPages, $page + 2);
        for ($i = $start; $i <= $end; $i++) {
            $active = ($i == $page) ? 'active' : '';
            echo "<li class='page-item $active'><a class='page-link' href='?page=$i&$urlParams'>$i</a></li>";
        }
        if ($page < $totalPages) {
            $nextPage = $page + 1;
            echo "<li class='page-item'><a class='page-link' href='?page=$nextPage&$urlParams'>Próxima</a></li>";
        }
        echo "</ul>";
        echo "</nav>";
    }
echo "</div>";