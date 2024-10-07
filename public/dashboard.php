<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    include '../templates/header.php';
?>
<div class="container mt-5">
    <h2>Bem-vindo ao Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Esta é a sua área restrita. Aproveite!</p>
    <a href="logout.php" class="btn btn-danger">Sair</a>
</div>
<?php
    include '../templates/footer.php';
?>