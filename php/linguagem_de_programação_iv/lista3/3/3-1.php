<?php
$flag_msg = null;
$msg = "";

while($row = mysqli_fetch_array($result)){    
    $encode[] = $row;
}
echo json_encode("tabela.json"); 
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício PHP 03</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Compromisso</h1>
      <hr class="my-3">
      <p class="lead">Crie um documento HTML que permita incluir compromissos. Os campos solicitados
devem ser: usuário, compromisso, local, data e hora. Os compromissos devem ser
gravados em um arquivo no formato JSON. Crie também uma página que liste os
compromissos de um determinado usuário e permita excluir compromissos.</p>
    </div>
  </header>

  <div class="container">
  <form>
    <div class="form-group col-md-5">
      <label class="centro" for="usuario">Usuário:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="compromisso">Compromisso:</label>
      <input type="text" class="form-control" id="compromisso" name="compromisso" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="local">Local:</label>
      <input type="text" class="form-control" id="local" name="local" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="data">Data:</label>
      <input type="date" class="form-control" id="data" name="data" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="hora">Hora:</label>
      <input type="time" class="form-control" id="hora" name="hora" required>
      <br>
    </div>
      <a href="3-1.php"><button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button></a>
      <a  href="3.php"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
  </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-dark' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>