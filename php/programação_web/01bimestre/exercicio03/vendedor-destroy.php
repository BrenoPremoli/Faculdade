<?php

if (isset($_GET['id'])) {
    require "connection.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM vendedores WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("location: vendedor-list.php");
    exit;
}