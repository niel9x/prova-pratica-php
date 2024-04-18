<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - connectify</title>
</head>
<body>
    
    <aside class="viewer">

        <div class="text">
            <h1>
                Não perca tempo, faça já parte desta familia acolhedora!
            </h1>
        </div>
        <img class="join" src="assets/undraw_join_re_w1lh 1.svg" alt="">
    </aside>
    <div class="container-reg">
    <div class="register-box">
        <h1>CADASTRO</h1>
        <form method="POST" action="index-registro.php">
        <input type="text" name="username" placeholder="Nome de usuário" required><br>
        <input type="email" name="email" placeholder="Endereço de e-mail" required><br>
        <input type="date" name="datanasc" required><br>
        <input type="password" name="password" placeholder="Senha" required><br>
        <input type="submit" value="Criar cadastro!">
    </form>

        <h1 class="hh"><span class="padrao">Já tem cadastro?</span> <a href="index.php">Faça LOGIN!</a></h1>
    </div>
</div>
</body>
</html>