<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 21/03/2017
 * Time: 18:27
 */
include 'helpers.php';

$query = $pdo->query("SELECT* FROM movies");


$result = $query->fetchAll();

include 'index.view.php';