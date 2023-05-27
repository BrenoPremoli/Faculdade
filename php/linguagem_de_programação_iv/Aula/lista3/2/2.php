<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $times1 = $_GET["times1"];
    $times2 = $_GET["times2"];
    $times3 = $_GET["times3"];
    $times4 = $_GET["times4"];
    $times5 = $_GET["times5"];

    $arquivo = fopen("times.txt", "w")
    or die("Não consegui abrir o arquivo!");

    fwrite($arquivo, $times1 . "\n");
    fwrite($arquivo, $times2 . "\n");
    fwrite($arquivo, $times3 . "\n");
    fwrite($arquivo, $times4 . "\n");
    fwrite($arquivo, $times5);

    $flag_msg = true;

    $arquivo = fopen("times.txt", "r")
    or die("Não consegui abrir o arquivo!");
    
    while(!feof($arquivo))
    {
    $msg .= fgets($arquivo) . "<br />";
    }
    fclose($arquivo);
}
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício PHP 02</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">5 times</h1>
      <hr class="my-3">
      <p class="lead">Crie um documento HTML que permita ao usuário digitar cinco nomes de times de
futebol. Faça um script PHP com uma função que receba os nomes dos times
submetidos a partir do documento HTML anterior e salve-os em um arquivo “times.txt”.
O script deverá ser capaz de imprimir os nomes salvos no arquivo.</p>
    </div>
  </header>

  <div class="container">
  <form>
    <div class="form-group col-md-5">
      <label class="centro" for="times1">Digite o nome do 1º time:</label>
      <input type="text" class="form-control" id="times1" name="times1" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="times2">Digite o nome do 2º time:</label>
      <input type="text" class="form-control" id="times2" name="times2" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="times3">Digite o nome do 3º time:</label>
      <input type="text" class="form-control" id="times3" name="times3" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="times4">Digite o nome do 4º time:</label>
      <input type="text" class="form-control" id="times4" name="times4" required>
      <br>
    </div>
    <div class="form-group col-md-5">
      <label class="centro" for="times5">Digite o nome do 5º time:</label>
      <input type="text" class="form-control" id="times5" name="times5" required>
      <br>
    </div>
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
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