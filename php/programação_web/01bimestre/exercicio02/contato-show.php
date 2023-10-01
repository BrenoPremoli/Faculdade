<?php 

if (isset($_GET['id'])) {
    require "connection.php";
    require "classes/Contato.php";

    $id = $_GET['id'];
    $lida = true;

    $sql = "SELECT * FROM contatos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]); 
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Contato');
    $contato = $stmt->fetch();

    $sql = "UPDATE contatos SET lida = :lida WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':lida', $lida, PDO::PARAM_INT); 
    $stmt->bindParam(':id', $id); 
    $stmt->execute(); 

}else{
    header("location: contato-list.php");
    exit;
}
require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Contatos</h1>
  <hr class="my-3">
  <p class="lead">Leitura de mensagens.</p>
</div>

<div class="container">
  <a class="btn btn-primary" href="contato-list.php">Voltar</a>
  <p></p>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Envio:</strong>
                <?= date('d/m/Y H:i:s', strtotime($contato->getData())); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome: </strong>
                <?= $contato->getNome(); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail: </strong>
                <?= $contato->getEmail(); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo: </strong>
                <?= $contato->getTipo(); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mensagem: </strong>
                <p><?= $contato->getMensagem(); ?></p>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer_inc.php"; ?>