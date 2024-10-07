<?php
    session_start();
    include '../config/config.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT digimon_name, data_adicionado FROM favoritos WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    include '../templates/header.php';
?>
<div class="container mt-5">
    <h2>Meus Digimons Favoritos</h2>
    <?php if ($result->num_rows > 0): ?>
        <ul class="list-group">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li class="list-group-item">
                    <?php echo $row['digimon_name']; ?>
                    <span class="text-muted">(Adicionado em: <?php echo $row['data_adicionado']; ?>)</span>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <div class="alert alert-info">Você ainda não favoritou nenhum Digimon.</div>
    <?php endif; ?>
</div>
<?php include '../templates/footer.php'; ?>