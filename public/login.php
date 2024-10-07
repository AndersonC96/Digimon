<?php
    include '../config/config.php';
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (!empty($email) && !empty($senha)) {
            $sql = "SELECT * FROM usuarios WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if ($user && password_verify($senha, $user['senha'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "E-mail ou senha incorretos.";
            }
        } else {
            $error = "Todos os campos são obrigatórios.";
        }
    }
?>
<?php include '../templates/header.php'; ?>
<div class="container mt-5">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <p class="mt-3">Não tem uma conta? <a href="register.php">Registre-se aqui</a>.</p>
</div>
<?php include '../templates/footer.php'; ?>