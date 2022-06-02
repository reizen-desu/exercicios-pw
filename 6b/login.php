<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link href="assets/css/login.css" rel="stylesheet">
    <style>
        button {
            background: #06f;
            color: white;
            border-radius: 10px;
            border: none;
            padding: 10px;
        }
    </style>
</head>

<body class="text-center">
<form class="form-signin" action="controller/login_controller.php" method="post">
    <h1><i class="fa fa-user"></i></h1>
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label>Nome de usuario</label>
    <input type="text" id="usuario" class="form-control" placeholder="introduza o nome de usuario" required autofocus name="usuario">
    <label>Senha</label>
    <input type="password" id="senha" class="form-control" placeholder="Introduza a senha" required name="senha">
    <button class="btn" type="submit" name="entrar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">Admin: usuario: <b>admin</b>, senha: <b>admin</b></p>
    <p class="mt-5 mb-3 text-muted">Usuario: usuario: <b>user1</b>, senha: <b>user1</b></p>
</form>
</body>
</html>
