<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - GenesFlix</title>
    <link rel="stylesheet" href="styles_cadastro.css">
</head>

<body>
    <div class="header">
        <div class="header-left">🧬GenesFlix</div>
        <div class="header-right color-border">
            <img src="dna.png" alt="Perfil">
        </div>
    </div>
    <div class="registration-container">
        <div class="registration-form">
            <div class="icon-container">
                <h4>🧬</h4>
            </div>
            <h2>Cadastrar-se</h2>
            <?php
            if (isset($_POST["submit"])) {
                $fullName = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["repeat_password"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();

                if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
                    array_push($errors, "Todos os campos são obrigatórios");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "O e-mail não é válido");
                }
                if (strlen($password) < 8) {
                    array_push($errors, "A senha deve ter pelo menos 8 caracteres");
                }
                if ($password !== $passwordRepeat) {
                    array_push($errors, "As senhas não coincidem");
                }

                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (mysqli_num_rows($result) > 0) {
                        array_push($errors, "O e-mail já está em uso!");
                    }
                }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } else {
                    $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Cadastro realizado com sucesso.</div>";
                    } else {
                        die("Algo deu errado");
                    }
                }
            }
            ?>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Nome Completo" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repeat_password" placeholder="Repita a Senha" required>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="submit">
                </div>
            </form>
            <div class="login-link">
                <p>Já possui uma conta? <a href="login.php">Faça login aqui</a></p>
            </div>
        </div>
    </div>
</body>

</html>
