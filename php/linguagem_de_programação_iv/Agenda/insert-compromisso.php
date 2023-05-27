<?php
require("header-inc.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}

/**
 * Insert data into Table
 */

require_once('connection.php');

if (isset($_POST['enviar'])) {
    $descricao = $_POST['descricao'];
	$data_inicio = $_POST['data_inicio'];
	$duracao = $_POST['duracao'];
	$idcontato = $_POST['idcontato'];

	// Mysql query to insert record into table
	$mysql_query = "INSERT INTO compromissos (descricao, data_inicio, duracao, idcontato) 
								VALUES ('{$descricao}', '{$data_inicio}', '{$duracao}', '{$idcontato}')";
	
	$result = $conn->query($mysql_query);

	if ($result === TRUE) {
		$msg =  "insert success";
		$msgerror = "";
	}
	else {
		$msg =  "insert error";
		$msgerror = $conn->error;
	}

	//Connection Close
	mysqli_close($conn);

	header("Location: compromissos.php?msg={$msg}&msgerror={$msgerror}");
} else {
	$mysql_query = "SELECT * FROM contatos ORDER BY nome";
	$result = $conn->query($mysql_query);

	//Connection Close
	mysqli_close($conn);
}
?>

<div class="container">
	<h2>Compromissos</h2>
  	<p>Cadastro de compromissos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<label for="descricao">&nbsp;Descrição</label>
			<input type="text" name="descricao" id="descricao" class="form-control" style="width: 500px;" required><br>
			<label for="data_inicio">&nbsp;Início</label>
			<input type="date" name="data_inicio" id="data_inicio" class="form-control" style="width: 200px;"><br>
			<label for="duracao">&nbsp;Duração (em minutos)</label>
			<input type="text" name="duracao" id="duracao" class="form-control" style="width: 50px;"><br>
			<select class="form-control" name="idcontato" id="idcontato">
  				<option selected>...</option>
				<?php while ($contatos = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
				<option value="<?= $contatos['id']; ?>"><?= $contatos['nome']; ?></option>
				<?php } ?>
			</select>
			<br>
			<input type="submit" name="enviar" value="Inserir" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>