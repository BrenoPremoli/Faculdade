<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h1>Exercício 02</h1>
    <br />
    <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Selecione a imagem para uoload:</label>
                <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
            </div>       
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar imagem</button>
            </div>
    </form>
</div>

<?php require_once "footer.php"; ?>