<?php

$host = 'localhost';
$db   = 'egiska_movies';
$port = 8889;
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host; port=$port;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

//Papildoma eilute kuri sutvarko PDO, nes priesingu atveju neveikia puslapiavimas
$pdo->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );