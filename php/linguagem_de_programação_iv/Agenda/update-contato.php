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
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$datanasc = $_POST['datanasc'];

	// Mysql query to update record in a table
	$mysql_query = "UPDATE contatos SET nome='{$nome}', email='{$email}', datanasc='{$datanasc}' WHERE id={$id}";

	if ($conn->query($mysql_query) === TRUE) {
		$msg = "update success";
		$msgerror = "";
	}
	else {
		$msg = "update error";
		$msgerror = $conn->error;
	}
	header("Location: contatos.php?msg={$msg}&msgerror={$msgerror}");
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$mysql_query = "SELECT * FROM contatos WHERE id={$id}";
	$result = $conn->query($mysql_query);
	$row = mysqli_fetch_assoc($result);
}

// Connection Close
mysqli_close($conn);	
?>
<div class="container">
	<h2>Contatos</h2>
  	<p>Atualização do cadastro de contatos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<input type="hidden" name="id" value="<?= $row['id']; ?>">
			<label for="name">&nbsp;Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required value="<?= $row['nome']; ?>"><br>
			<label for="email">&nbsp;E-Mail</label>
			<input type="text" name="email" id="email" class="form-control"required value="<?= $row['email']; ?>"><br>
			<label for="datanasc">&nbsp;Data de Nascimento</label>
			<input type="date" name="datanasc" id="datanasc" class="form-control" 
												style="width: 200px;" value="<?= $row['datanasc']; ?>"><br>
			<input type="submit" name="enviar" value="Atualizar" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>