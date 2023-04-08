<?php
$flag_msg = true;
$msg = "";

$arquivo = fopen("Breno de Oliveira Premoli.txt", "w")
or die("Não consegui abrir o arquivo!");
$txt = "Romero é muito bagre\n";
fwrite($arquivo, $txt);
$txt = "A diretoria do SCCP é incompetente\n";
fwrite($arquivo, $txt);
$txt = "A europa teme o Real Madrid e o Real Madrid teme o Barcelona\n";
fwrite($arquivo, $txt);
$arquivo = fopen("Breno de Oliveira Premoli.txt", "r")
or die("Não consegui abrir o arquivo!");
while(!feof($arquivo))
{
$msg .= fgets($arquivo) . "<br />";
}
fclose($arquivo);
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    form {
      text-align: center;
    }
  </style>
  <title>Exercício PHP 01</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">3 frases</h1>
      <hr class="my-3">
      <p class="lead">Crie um script que gere um arquivo com o seu nome e a extensão “.txt”, abra-o e guarde
03 frases nele. Depois crie um script que imprima o conteúdo gravado nesse arquivo.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
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