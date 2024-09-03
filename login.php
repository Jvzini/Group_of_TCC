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
    <title>Login - GenesFlix</title>
    <link rel="stylesheet" href="styles_login.css">
</head>

<body>
   
    <div class="login-container">
        <div class="login-form">
            <div class="icon-container">
                <h4>🧬</h4>
            </div>
            <h2>Login</h2>
            <?php
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if (password_verify($password, $user["password"])) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: index.php");
                            exit();
                        } else {
                            echo "<div class='alert alert-danger'>A senha não coincide</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>O e-mail não coincide</div>";
                    }
                }
            }
            ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Entrar" name="login">
                </div>
            </form>
            <div class="register-link">
                <p>Ainda não tem uma conta? <a href="registration.php">Cadastre-se aqui</a></p>
            </div>
        </div>
    </div>
</body>

</html>