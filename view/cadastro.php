<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro - 2of us</title>
  </head>

  <body>
    <main class="text-center">
      <img src="img/logo2ofus.png" alt="Logo 2 of us" class="logo" />
      <h1>Realize seu cadastro</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <form method="post" id="formCadastro" action="verificacadastro.php">
              <label for="nome">Nome:</label><br>
              <input type="text" maxlength="45" size="50" name="nome" id="nome" required autofocus><br>
              <label for="email">E-mail:</label><br>
              <input type="email" maxlength="45" size="50" name="email" id="email" required><br>
              <label for="senha">Senha:</label><br>
              <input type="password" maxlength="45" size="50" name="senha" id="senha" required><br>
              <label for="dtNasc">Data de Nascimento:</label><br>
              <input type="date" name="dtNasc" id="dtNasc" required><br>
              <label for="sexo">Sexo:</label><br>
              <select name="sexo" id="sexo" required>
                <option value="">Selecione...</option>
                <option value="f">Feminino</option>
                <option value="m">Masculino</option>
                <option value="b">Não binário</option>
              </select><br><br>
              <button type="submit" form="formCadastro" accesskey="C">Cadastrar</button>
            </form>
          </div>
          <div class="col-lg-4"></div>
        </div>
      </div>
    </main>
  </body>
  
</html>