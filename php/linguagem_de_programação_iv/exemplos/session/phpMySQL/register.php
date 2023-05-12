<?php
require("header-inc.php");
?>

<div class="container-sm">
    <h2>Registro</h2>
    <p>Por favor, preencha os campos do formulário para criar a sua conta.</p>
    <hr>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuário:</label>
                <input type="text" name="username" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Confirmação da senha</label>
                <input type="password" name="confirm_password" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-secondary ml-2" value="Limpar">
            </div>
            <p>Já possui uma conta? <a href="login.php">Faça o seu login aqui</a>.</p>
        </form>
    </div>    
</div>

<?php require("footer-inc.php"); ?>