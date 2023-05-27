<?php
require("header-inc.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }
  
/**
 * Update data in a Table
 */

require_once('connection.php');

if (isset($_POST['enviar'])) {

	$id = $_POST['id'];
	$descricao = $_POST['descricao'];
	$duracao = $_POST['duracao'];
	$data_inicio = $_POST['data_inicio'];
	$idcontato = $_POST['idcontato'];

	// Mysql query to update record in a table
	$mysql_query = "UPDATE compromissos SET descricao='{$descricao}', data_inicio='{$data_inicio}', duracao='{$duracao}', idcontato='{$idcontato}' WHERE id={$id}";

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

	$mysql_query = "SELECT * FROM contatos ORDER BY nome";
	$result = $conn->query($mysql_query);
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
			<label for="descricao">&nbsp;Descrição</label>
			<input type="text" name="descricao" id="descricao" class="form-control" required value="<?= $row['descricao']; ?>"><br>
			<label for="data_inicio">&nbsp;Início</label>
			<input type="date" name="data_inicio" id="data_inicio" class="form-control" 
												style="width: 200px;" value="<?= $row['data_inicio']; ?>"><br>
			<label for="duracao">&nbsp;Duracao</label>
			<input type="text" name="duracao" id="duracao" class="form-control" style="width: 50px;" value="<?= $row['duracao']; ?>"><br>
			<select class="form-control" name="idcontato" id="idcontato">
				<?php while ($contatos = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
				<option value="<?= $contatos['id']; ?>" 
				<?php if ($contatos['id'] == $row['idcontato']) {	echo "selected"; } ?>><?= $contatos['nome']; ?></option>
			<?php } ?>
			</select>			
			<br><input type="submit" name="enviar" value="Atualizar" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>