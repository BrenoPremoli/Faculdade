<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h1>Exercício 01</h1>
    <br />
    <?php
    echo readfile("webdictionary.txt");
    echo "<hr/>";

    $myfile = fopen("webdictionary.txt", "r")
                or die("Não consegui abrir o arquivo!");

    // echo fread($myfile, filesize("webdictionary.txt"));

    while(!feof($myfile))
    {
        echo fgets($myfile) . "<br />";
    }
    fclose($myfile);
    echo "<hr/>";

    $myfile = fopen("newfile.txt", "w")
                or die("Não consegui abrir o arquivo!");
    $txt = "O palmeiras não tem mundial!!!\n";
    fwrite($myfile, $txt);
    $txt = "Nem a rainha da Inglaterra conseguiu esperar o título!\n";
    fwrite($myfile, $txt);

    $myfile = fopen("newfile.txt", "r")
                or die("Não consegui abrir o arquivo!");
    while(!feof($myfile))
    {
         echo fgets($myfile) . "<br />";
    }
    fclose($myfile);

    echo "<hr/>";

    $path = "./";
    $itens = new DirectoryIterator($path);

    foreach ($itens as $item) {
    if ($item->isDir()) {
    $diretorios[] = $item->getFilename();
     }
    else
    {
        $arquivos[] = $item->getFilename();
    }
    }
    $file = fopen("listaDir.txt", "w" )
    or die("Falha na abertura do arquivo!");
    $texto = "";
    foreach($diretorios as $txt) {
    echo "<a href='" . $path . $txt . "'>[" . $txt . "]</a><br>";
    $texto .= "$txt\n";
    }
     foreach($arquivos as $txt) {
     echo "<a href='" . $path . $txt . "'>" . $txt . "</a><br>";
    $texto .= "$txt\n";
}    
     fwrite($file, $texto);
     fclose($file);
     echo "<hr>";
     ?>
    </div>
    <?php require_once "footer.php"; ?>