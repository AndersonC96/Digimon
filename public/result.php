<?php
    session_start();
    include '../config/config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['favoritar'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }
        $digimon_name = $_POST['digimon_name'];
        $user_id = $_SESSION['user_id'];
        $sql = "INSERT INTO favoritos (user_id, digimon_name) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $digimon_name);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Digimon favoritado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro ao favoritar Digimon. Tente novamente.</div>";
        }
    }
    if (isset($digimon_name)) {
        echo "<div class='digimon-result'>";
        echo "<h3>$digimon_name</h3>";
        if (isset($_SESSION['user_id'])) {
            echo "<form method='POST' action=''>
                    <input type='hidden' name='digimon_name' value='$digimon_name'>
                    <button type='submit' name='favoritar' class='btn btn-primary'>Favoritar</button>
                </form>";
        }
        echo "</div>";
    }