<?php
session_start();
include("config.php");

// Verifica se o usuário está logado, caso contrário, redireciona para a página de login
if(!isset($_SESSION['loggedin'])){
    header("Location: index.php");
    exit;
}

$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE Id=$id ");
$result = mysqli_fetch_assoc($query);

$res_Uname = $result['username'];
$res_Email = $result['email'];
$res_Datanasc = $result['datanasc'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <p>Username: <?php echo $res_Uname; ?></p>
    <p>Email: <?php echo $res_Email; ?></p>
    <p>Date of Birth: <?php echo $res_Datanasc; ?></p>
</body>
</html>
