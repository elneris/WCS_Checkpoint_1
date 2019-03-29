<?php

require_once 'connect.php';
require_once 'function.php';
$pdo = new PDO(DSN,USER,PASS);

if(!empty($_POST))
{
    $errors = [];

    if(empty($_POST['firstname']) || empty($_POST['lastname'])|| empty($_POST['civility']))
    {
        $errors[] = 'Error';
    } else {
        $firstname = testInput($_POST['firstname']);
        $lastname = testInput($_POST['lastname']);
    }

    if(count($errors) == 0)
    {
        $prepared = $pdo->prepare("INSERT INTO contact VALUES (NULL, :lastname, :firstname, :civility);");
        $prepared->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
        $prepared->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
        $prepared->bindValue(':civility', $_POST['civility'], PDO::PARAM_INT);

        $prepared->execute();
        header('Location: ../public/index.php?page=add&success=yes');
        exit;
    } else {
        $firstname = testInput($_POST['firstname']);
        $lastname = testInput($_POST['lastname']);
        header('Location: ../public/index.php?page=add&success=no&firstname='.$firstname.'&lastname='.$lastname.'');
    }
}

