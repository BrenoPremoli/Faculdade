<?php
require("header-inc.php");
?>
 
<div class="container-sm">
    <h2>Alterar senha</h2>
    <p>Por favor, preencha os campos do formulário para alterar a sua senha.</p>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>Nova Senha:</label>
                <input type="password" name="new_password" class="form-control" value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Confirmação da Senha:</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <a class="btn btn-link ml-2" href="dashboard.php">Cancelar</a>
            </div>
        </form>
    </div>    
</div>

<?php require("footer-inc.php"); ?>