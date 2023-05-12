<?php
require("header-inc.php");
?>

<div class="container-sm">
    <h2>Login</h2>
    <p>Por favor, entre com os seus dados de login.</p>
    <hr>
    <div class="wrapper">
        <form action="" method="post">
            <div class="form-group">
                <label>Usuário:</label>
                <input type="text" name="username" class="form-control">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="password" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Não possui uma conta? <a href="register.php">Registre-se agora</a>.</p>
        </form>
    </div>
</div>

<?php require("footer-inc.php"); ?>