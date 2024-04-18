<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $datanasc = $_POST['datanasc'];
    $password = $_POST['password'];

    // Hash da senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar e executar a consulta SQL
    $sql = "INSERT INTO users (username, email, datanasc, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $datanasc, $hashed_password);
    $stmt->execute();

    // Verificar se a inserção foi bem sucedida
    if ($stmt->affected_rows == 1) {
        // Redirecionar para a página de login após o registro bem sucedido
        header("location: index.php");
        exit;
    } else {
        // Se ocorrer algum erro durante a inserção, você pode lidar com isso aqui
        echo "Erro ao registrar o usuário. Por favor, tente novamente.";
    }
}
?>
