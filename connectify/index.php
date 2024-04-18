<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (isset($row['password']) && password_verify($password, $row['password'])) {
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: edit.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectify Login</title>
</head>
<body>
    <header>
        <h1>Connecti<span class="pp">fy</span>&lt;/&gt;</h1>
    </header>

    <aside>
        <img src="assets/undraw_undraw_undraw_love_it_xkc2_gyie_-1-_ty26.svg" alt="">

        <h1>
            Faça<br><span class="destaque">login</span> e <br>participe</br> do nosso <br>time!
        </h1>

        <div class="container">
            <div class="login-box">
                
                <h1>LOGIN</h1>
                <form action="index.php" method="POST">
                    <input type="text" name="username" placeholder="nome de usuário" required>
                    <input type="password" name="password" placeholder="senha" required>
                    <input type="submit" value="Acessar!">
                </form>

                <div class="noacc">
                    <h1>Não tem uma conta? <span class="destaque"> <a href="registro.php">cadastre-se</a></span> já!</h1>
                </div>
            </div>
        </div>
    </aside>
</body>
</html>
