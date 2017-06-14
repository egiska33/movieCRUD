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
//print_r(r$result);


//apsauga nuo perdidelio  arba neegzituojancio id
    if($result == false){
        header('Location: index.php');
        exit;
    }
    include "show.view.php";

