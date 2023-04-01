<?php
$flag_msg = null;
$msg = "";


if ($_GET) // isset verifica se a variável foi iniciada
{
    $nome = $_GET["nome"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    if (!isset($_GET['exame']))
    {
        $media = ($n1 + $n2 + $n3 + $n1) / 4;
        if ($media >= 7)
        {
        $flag_msg = true;
        $msg = "Aluno: {$nome} <br/>Situação: APROVADO<br/>Média: ";
        $msg .= number_format($media ,2);
        }
        elseif($media < 5)
        {
        $flag_msg = false;
        $msg = "Aluno: {$nome} <br/>Situação: REPROVADO<br/>Média: ";
        $msg .= number_format($media ,2);   
        }
        else 
        {
            $flag_msg = false;
            $msg = "Aluno: {$nome} <br/>Situação: EM EXAME. DIGITE SEUS DADOS NOVAMENTE COM A NOTA DE EXAME<br/>Média: ";
            $msg .= number_format($media ,2); 
            $msg .= '<div class="form-group col-md-3">
            <form method="GET">
            <div >
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
              </div>
              <div class="form-group col-md-5">
                <label for="n1">Nota 1:</label>
                <input type="text" class="form-control" id="n1" name="n1" required>
              </div>
              <div class="form-group col-md-5">
                <label for="n2">Nota 2:</label>
                <input type="text" class="form-control" id="n2" name="n2" required>
              </div>
              <div class="form-group col-md-5">
                <label for="n3">Nota 3:</label>
                <input type="text" class="form-control" id="n3" name="n3" required>
              </div>
              <div class="form-group col-md-5">
                <label for="n4">Nota 4:</label>
                <input type="text" class="form-control" id="n4" name="n4" required>
              </div>
            <div class="form-group col-md-5">
            <label for="exame">Nota Exame:</label>
            <input type="text" class="form-control" id="exame" name="exame">
            </div><br>
            <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
            </form>';
        }
    }
    else
    {
        $exame = $_GET["exame"];
        if ($exame >= 5)
        {
            $flag_msg = true;
            $msg = "Aluno: {$nome} <br/>Situação: APROVADO EM EXAME<br/>Nota do Exame: {$exame}";
        }
        else
        {
            $flag_msg = false;
            $msg = "Aluno: {$nome} <br/>Situação: REPROVADO NO EXAME<br/>Nota do Exame: {$exame}";
        }
    }
}
?>
<!doctype html>
<html lang="pr-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício PHP 12</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Média de 4 notas e Exame</h1>
      <hr class="my-3">
      <p class="lead">Ler o nome de um aluno e quatro valores referentes as suas notas bimestrais, calcular a média aritmética, e exibir uma mensagem informando se o aluno foi aprovado se o valor da média escolar for maior ou igual 7. Se o valor da média for menor que 7, solicitar a nota de exame e recalcular a média. Se a nova média for maior ou igual a 5, exibir uma mensagem informando que o aluno foi aprovado em exame. Se o aluno não for aprovado informar essa condição. Apresentar com as mensagens o nome do aluno e o valor da média, para qualquer condição. </p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
    <div class="form-group col-md-5">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n1">Nota 1:</label>
        <input type="text" class="form-control" id="n1" name="n1" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n2">Nota 2:</label>
        <input type="text" class="form-control" id="n2" name="n2" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n3">Nota 3:</label>
        <input type="text" class="form-control" id="n3" name="n3" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n4">Nota 4:</label>
        <input type="text" class="form-control" id="n4" name="n4" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="12.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-success' role='alert'>$msg</div><br>"; 
        }
        else{
          echo "<div class='alert alert-danger' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>