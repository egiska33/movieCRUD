<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if( strlen($_POST['title']) > 0 && strlen($_POST['image']) > 0 && strlen($_POST['year']) > 0 && strlen($_POST['length']) > 0) {
    $title = $_POST['title'];
    $image = $_POST['image'];
    $year = $_POST['year'];
    $length = $_POST['length'];
    $id = $_GET['id'];


    include 'helpers.php';
    $query = $pdo->prepare("UPDATE `movies` SET `title` = :title, `image` = :image, `year` = :year, `length` = :length  WHERE `id` = :id");

    $query->execute([
        'title' => $title,
        'image' => $image,
        'year' => $year,
        'length' => $length,
        'id' => $id
    ]);

    include 'index.php';

}else {
    include "header.php";
    echo "<h2 style='color:#f00'>Prasome uzpildyti visus laukus</h2>";
    include 'edit2.view.php';
    include 'footer.php';

}