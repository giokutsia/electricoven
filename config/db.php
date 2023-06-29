<?php

$pdo = new PDO('mysql:host=localhost;dbname=electric_oven', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM ovens');
$statement->execute();
$ovens = $statement->fetchAll(PDO::FETCH_ASSOC);
if($ovens){
    $last_created = $ovens[count($ovens) - 1];
}
