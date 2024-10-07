<?php
    return [
        'digimon_api_url' => 'https://digimon-api.vercel.app/api/digimon',
    ];
    $host = 'localhost';
    $dbname = 'digimon_db';
    $username = 'root';
    $password = '';
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }