<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Criar evento - 2of us</title>
    <script>
      function Aparece(el) {
          var display = document.getElementById(el).style.display;
              document.getElementById(el).style.display = 'block';
      }
    </script>
  </head>

  <bod>
    <main class="text-center">
      <img src="img/logo2ofus.png" alt="Logo 2 of us" class="logo" />
      <h1>Criar evento</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form method="post" id="formEditaEvento" action="principal.php">
              <label for="nomeEvento">Evento:</label><br>
              <input type="text" maxlength="45" size="50" name="nomeEvento" id="nomeEvento" required autofocus><br>
              <label for="dtEvento">Data de realização:</label><br>
              <input type="date" name=dtEvento id="dtEvento" required><br>
              <label for="senha">Lembrete:</label><br>
              <textarea name="lembrete" id="lembrete" cols="37" rows="5" maxlength="140"></textarea></br>
              <label for="alarme">Alarme:</label>
              <input type="checkbox" name="alarme" value="alarme" onclick="Aparece('hrAlarmeAtual')">
              <input type="time" name="hrAlarme" id="hrAlarmeAtual" value="00:00"><br><br>
              <button type="submit" form="formEditaEvento" accesskey="G">Gravar</button>
              <button type="submit" accesskey="C" onclick="window.location.href='principal.php'">Cancelar</button>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </main>
  </body>
  
</html>