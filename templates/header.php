<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Digimon</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3d7779fa7f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../public/style.css">
        <link rel="icon" href="data:image/x-icon;base64,...">
    </head>
    <body>
        <header class="bg-dark text-light py-3">
            <div class="container d-flex justify-content-between align-items-center">
                <h1>Bem-vindo ao Digimon Search</h1>
                <nav>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                    <?php else: ?>
                    <a href="login.php" class="btn btn-primary">Login</a>
                    <?php endif; ?>
                </nav>
            </div>
        </header>