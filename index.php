<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Acesse sua conta</h1>
    <form method="post" id="formLogin">
      <label for="email">E-mail</label><br>
      <input type="email" maxlength="45" size="50" name="email" id="email" required autofocus><br>
      <label for="senha">Senha</label><br>
      <input type="password" maxlength="45" size="50" name="senha" id="senha" required><br><br>
    </form>
      <button type="submit" form="formLogin">Entrar</button>
    <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se</a> e conecte-se ao seu parceiro!</p>
  </body>
</html>