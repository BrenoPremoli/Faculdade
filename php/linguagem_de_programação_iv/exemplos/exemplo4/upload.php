<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    echo "O arquivo não existe!";
    die();
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Seu arquivo e muito grande!";
    die();
}

// Allow certains file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Apenas arquivo nos formatos JPG, JPEG, PNG e GIF são aceitos.";
    die();
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]) . " foi carregado com sucesso.");
    echo "<img src='uploads/" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "' />";
} else {
    echo "Não foi possível carregar seu arquivo.";
}
?>