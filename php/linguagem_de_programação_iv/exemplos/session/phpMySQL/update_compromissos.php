<?php
require("header-inc.php");

  
/**
 * Update data in a Table
 */

require_once('connection.php');

if (isset($_POST['enviar'])) {

	$descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];
	$duracao = $_POST['duracao'];
    $idcontato = $_POST['idcontato '];

	// Mysql query to update record in a table
	$mysql_query = "UPDATE contatos SET descricao='{$descricao}', data_inicio='{$data_inicio}', duracao='{$duracao}', idcontato='{$idcontato}' WHERE id={$id}";

	if ($conn->query($mysql_query) === TRUE) {
		$msg = "update success";
		$msgerror = "";
	}
	else {
		$msg = "update error";
		$msgerror = $conn->error;
	}
	header("Location: compromissos.php?msg={$msg}&msgerror={$msgerror}");
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$mysql_query = "SELECT * FROM compromissos WHERE id={$id}";
	$result = $conn->query($mysql_query);
	$row = mysqli_fetch_assoc($result);
}

// Connection Close
mysqli_close($conn);	
?>
<div class="container">
	<h2>Compromissos</h2>
  	<p>Atualização do cadastro de compromissos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<input type="hidden" name="id" value="<?= $row['id']; ?>">
			<label for="descricao">Descrição</label>
			<input type="text" name="descricao" id="descricao" class="form-control" required value="<?= $row['descricao']; ?>"><br>
            <label for="data_inicio">Data de Início:</label>
			<input type="date" name="data_inicio" id="data_inicio" class="form-control" style="width: 200px;" value="<?= $row['data_inicio']; ?>"><br>
			<label for="duracao">Duração</label>
			<input type="number" name="duracao" id="duracao" class="form-control" required value="<?= $row['duracao']; ?>"><br>
			<input type="submit" name="enviar" value="Atualizar" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>