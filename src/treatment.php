<?php

require_once 'connect.php';
$pdo = new PDO(DSN,USER,PASS);

if (!empty(isset($_POST))) {
    $prepared = $pdo->prepare("INSERT INTO contact VALUES (NULL, :lastname, :firstname, :civility);");
    $prepared->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $prepared->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $prepared->bindValue(':civility', $_POST['civility'], PDO::PARAM_STR);

    $prepared->execute();
    header('Location: ../public/index.php?page=add&success=yes');
}