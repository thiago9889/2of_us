<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Editar evento - 2of us</title>
    <script>
      function confirma() {
     var x;
     if (confirm("Tem certeza que deseja excluir este evento?") == true) {
         window.location.href='principal3.php';
     }
}
    </script>
  </head>

  <bod>
    <main class="text-center">
      <img src="img/logo2ofus.png" alt="Logo 2 of us" class="logo" />
      <h1>Editar evento</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form method="post" id="formEditaEvento" action="principal2.php">
              <label for="nomeEvento">Evento:</label><br>
              <input type="text" maxlength="45" size="50" name="nomeEvento" id="nomeEvento" value="Jantar na casa da sogra (Rita)" required autofocus><br>
              <label for="dtEvento">Data de realização:</label><br>
              <input type="date" name=dtEvento id="dtEvento" value="2017-05-20" required><br>
            <label for="alarme">Horário:</label><br>
              <input type="time" name="hrAlarme" id="hrAlarme" value="19:00"><br><br>
              <hr>
              
              <h3>Alarmes:</h3>
<div class="form-horizontal text-left">
    <div class="form-group">
      <label class="col-sm-8 control-label" for="check1">1 Semana antes</label>
          <div class="col-sm-2" >
            <div class="checkbox">
                  <input type="checkbox" id="check1">
            </div>
          </div>
    </div>
    <div class="form-group">
      <label class="col-sm-8 control-label" for="check1">2 Dias antes</label>
          <div class="col-sm-2">
            <div class="checkbox">
                  <input type="checkbox" id="check1">
            </div>
          </div>
    </div>
    <div class="form-group">
      <label class="col-sm-8 control-label" for="check1">1 Dia antes</label>
          <div class="col-sm-2">
            <div class="checkbox">
                  <input type="checkbox" id="check1">
            </div>
          </div>
    </div>
    <div class="form-group">
      <label class="col-sm-8 control-label" for="check1">12 Horas antes</label>
          <div class="col-sm-2">
            <div class="checkbox">
                  <input type="checkbox" id="check1">
            </div>
          </div>
    </div>
    <div class="form-group">
      <label class="col-sm-8 control-label" for="check1">1 Hora antes</label>
          <div class="col-sm-2">
            <div class="checkbox">
                  <input type="checkbox" id="check1">
            </div>
          </div>
    </div>
</div>
      <br/>       
              
            <button type="submit" form="formEditaEvento" accesskey="G">Gravar</button>
              <button type="submit" accesskey="C" onclick="window.location.href='principal.php'">Cancelar</button><br/><br/>  
            </form>
            
              <button type="submit" accesskey="E" onclick=confirma()><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir</button>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </main>
  </body>
  
</html>