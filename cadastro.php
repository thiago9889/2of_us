<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
  </head>
  <body>
    <h1>Realize seu cadastro</h1>
    <form method="post" id="formCadastro">
      <label for="nome">Nome</label><br>
      <input type="text" maxlength="45" size="50" name="nome" id="nome" required autofocus><br>
      <label for="email">E-mail</label><br>
      <input type="email" maxlength="45" size="50" name="email" id="email" required><br>
      <label for="senha">Senha</label><br>
      <input type="password" maxlength="45" size="50" name="senha" id="senha" required><br>
      <label for="dtNasc">Data de Nascimento</label><br>
      <input type="date" name="dtNasc" id="dtNasc" required><br>
      <label for="sexo">Sexo</label><br>
      <select name="sexo" id="sexo">
        <option value="">Selecione...</option>
        <option value="f">Feminino</option>
        <option value="m">Masculino</option>
        <option value="b">Não binário</option>
      </select><br><br>
    </form>
      <button type="submit" form="formCadastro">Cadastrar</button>
  </body>
</html>