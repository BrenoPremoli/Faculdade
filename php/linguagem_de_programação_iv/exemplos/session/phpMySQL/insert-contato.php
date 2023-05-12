<?php
require("header-inc.php");

if (isset($_POST['enviar']))
{
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$datanasc = $_POST['datanasc'];

	// validação em php

	require_once('connection.php');

	//MySQL query to insert record into table

	$mysql_query = " INSERT INTO contatos (nome, email, datanasc) VALUES ('{$nome}', '{$email}', '{$datanasc}')";

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
	header("Location: contatos.php?msg={$msg}&msgerror={$msgerror}");
}










?>

<div class="container">
	<h2>Contatos</h2>
  	<p>Cadastro de contatos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<label for="name"> Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required><br>
			<label for="email"> E-Mail</label>
			<input type="text" name="email" id="email" class="form-control"required><br>
			<label for="datanasc"> Data de Nascimento</label>
			<input type="date" name="datanasc" id="datanasc" class="form-control" style="width: 200px;"><br>
			<input type="submit" name="enviar" value="Inserir" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>