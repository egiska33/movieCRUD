<?php
if( !array_key_exists('id', $_GET)) {
    header('Location: index.php');
    exit;
}
$id = $_GET['id'];

include "helpers.php";

$query = $pdo->prepare("SELECT * FROM `movies` WHERE id=:id");
$query->execute(['id' => $id]);
$result = $query->fetch();


include 'header.php';
include 'edit2.view.php';
include 'footer.php';