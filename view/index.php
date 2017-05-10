<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Login - 2of us</title>
  </head>

  <body>
    <main class="text-center">
      <img src="img/logo2ofus.png" alt="Logo 2 of us" class="logo" />
      <h1>Acesse sua conta</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form method="post" id="formLogin" action="conexao.php">
              <label for="email">E-mail:</label><br>
              <input type="email" maxlength="45" name="email" id="email" required autofocus><br>
              <label for="senha">Senha:</label><br>
              <input type="password" maxlength="45" name="senha" id="senha" required><br><br>
              <button type="submit" form="formLogin" accesskey="E">Entrar</button>
            </form>
          </div>
        </div>
        <p>Não possui uma conta? <a href="cadastro.php" accesskey="C">Cadastre-se</a> e conecte-se ao seu parceiro!</p>
      </div>
    </main>
  </body>
  
</html>