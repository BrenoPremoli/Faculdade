<?php 

if (isset($_GET['id'])) {
    require "connection.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM tarefa WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute(); 

    header("location: index.php");
    exit;
}