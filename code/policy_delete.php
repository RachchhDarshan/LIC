<?php

    $pdo = new PDO("mysql:host=localhost;dbname=client","root","");
    $statement = $pdo->prepare("DELETE FROM policy WHERE id = ?");
    $statement->execute(array($_REQUEST["id"]));
    header("Location:../insurance.php");
?>