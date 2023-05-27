<?php

$dados = array(
    ['firstname' => 'John','lastname' => 'Doe','email' => 'john@example.com'],
    ['firstname' => 'Mary','lastname' => 'Moe','email' => 'mary@example.com'],
    ['firstname' => 'July','lastname' => 'Dooley','email' => 'july@example.com']
);

if (isset($_GET['var'])){
    $var = $_GET['var'];
    if ($var == "txt") {
        //texto
        $myfile = fopen("tabela.txt", "w") or die("Ferrou!!");
        $txt = "";
        foreach($dados as $d) {
            $txt .= $d["firstname"] . ", " . $d["lastname"] . ", " . $d["email"] . "\n";
        }
        fwrite($myfile, $txt);
        fclose($myfile);
    }elseif ($var == "csv") {
        //cvs
        $headers = ['Firstname', 'Lastname', 'Email'];
        $filecsv = fopen('tabela.csv', 'w');
        fputcsv($filecsv , $headers); // Criar com cabeçalho        
        foreach ($dados as $fields ) {
            fputcsv($filecsv, $fields);
        }        
        fclose($filecsv);
        //Criar aquivo na pasta do servidor
        echo "Export to CSV:<br>";
        echo "O arquivo tabela.csv foi criado com " . filesize("tabela.csv")  . " bytes.";

        //baixar o arquivo
        // $filepath = "tabela.csv";
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/octet-stream');
        // header("Content-Transfer-Encoding: utf-8");   
        // header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        // readfile($filepath);
    } else if ($var == "json") {
        //Criar aquivo na pasta do servidor
        // echo "Export to JSON:<br>";
        $json = json_encode($dados);
        $bytes = file_put_contents("tabela.json", $json); 
        // echo "O arquivo tabela.json foi criado com $bytes bytes.";

        //baixar o arquivo
        $filepath = "tabela.json";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: utf-8");   
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        readfile($filepath);
    }
    exit;
}

require_once "header.php"; 
?>

<div class="container" style="padding-top: 50px;">

  <h2>Tabela exemplo</h2>
  <p>Tabela para exportação de dados:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php
            foreach($dados as $d) {
                echo "<tr><td>" . $d["firstname"] . "</td><td>" . $d["lastname"] . 
                     "</td><td>" . $d["email"] . "</td></tr>";
            }
        ?>
        <?php
            foreach($dados as $d) {
        ?>
        <tr>
            <td><?= $d["firstname"] ?></td>
            <td><?= $d["lastname"] ?></td>
            <td><?= $d["email"] ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <p>Export to: <a href="?var=txt">texto</a> | <a href="?var=csv">csv</a> | <a href="?var=json">json</a></p>
</div>

<?php require_once "footer.php"; ?>
