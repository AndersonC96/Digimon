<?php
    $apiConfig = [
        'digimon_api_url' => 'https://digi-api.com/api/v1/digimon',
    ];
    $host = 'localhost';
    $dbname = 'digimon';
    $username = 'root';
    $password = '';
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }