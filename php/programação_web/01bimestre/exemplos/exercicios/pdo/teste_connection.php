<?php

require_once("connecetion.php");

$dados = $conn->$query("SELECT * FROM contatos");

try {
    $conn->beginTransaction();
    $result = $conn->exec("INSERT INTO contatos(nome, email) values('João', 'jon@gmail.com')");
    $result = $conn->exec("UPDATE contatos SET email = 'joaosilva@gmail.com')from id=3");
    // se tudo correu bem
    $conn->commit();

}catch(Exception $e) {
    // se ocorreu algum erro
    $conn->rollBack();
    echo 'Erro. Message: ' .$e->getMessage();
}

?>