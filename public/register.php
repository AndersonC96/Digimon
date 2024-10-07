<?php
    include '../config/config.php';
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (!empty($username) && !empty($email) && !empty($senha)) {
            $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (username, email, senha) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $senha_hashed);
            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Erro ao registrar. Tente novamente.";
            }
        } else {
            $error = "Todos os campos são obrigatórios.";
        }
    }
?>
<?php include '../templates/header.php'; ?>
<div class="container mt-5">
    <h2>Registro</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="username" class="form-label">Nome de Usuário</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<?php include '../templates/footer.php'; ?>