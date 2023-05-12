<?php
require("header-inc.php");
require_once('connection.php');


if (isset($_POST['enviar']))
{
	$descricao = $_POST['descricao'];
	$data_inicio = $_POST['data_inicio'];
	$duracao = $_POST['duracao'];
    $idcontato = $_POST['idcontato'];

	// validação em php
	//MySQL query to insert record into table

	$mysql_query = " INSERT INTO compromissos (descricao, data_inicio, duracao, idcontato) VALUES ('{$descricao}', '{$data_inicio}', '{$duracao}', '{$idcontato}')";


	$result = $conn->query($mysql_query);

	if ($result === TRUE)
	{
		$msg = "insert success";
		$msgerror = "";
	}
	else
	{
		$msg = "insert error";
		$msgerror = $conn->error;
	}

	//Connection close
	mysqli_close($conn);
	header("Location: compromissos.php?msg={$msg}&msgerror={$msgerror}");
}
else
{
    $mysql_query = "SELECT * FROM contatos ORDER BY nome";
    $result = $conn->query($mysql_query);

    mysqli_close($conn);
}
?>

<div class="container">
	<h2>Compromissos</h2>
  	<p>Cadastro de compromissos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<label for="descricao"> Descrição</label>
			<input type="text" name="descricao" id="descricao" class="form-control" required><br>
			<label for="data_inicio"> Inicio</label>
			<input type="date" name="data_inicio" id="data_inicio" class="form-control"style="width: 200px;"><br>
			<label for="duracao"> Duração (em minutos)</label>
			<input type="number" name="duracao" id="duracao" class="form-control" required><br>

            <select class="form-control" name="idcontato" id="idcontato">
                <option selected>...</option>
                <?php while ($contatos = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                    <option value="<?= $contatos['id'] ?>"><?= $contatos['nome'] ?></option>
                <?php } ?>
            </select>
			<input type="submit" name="enviar" value="Inserir" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>