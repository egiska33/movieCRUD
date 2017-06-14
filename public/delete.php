<?php

if( !array_key_exists('id', $_GET)) {
    header('Location: index.php');
    exit;
}
$id = $_GET['id'];

include "helpers.php";

$query = $pdo->prepare("DELETE FROM `movies` WHERE id=:id");
$query->execute(['id' => $id]);

include 'index.php';