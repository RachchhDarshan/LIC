<?php

    $pdo = new PDO("mysql:host=localhost;dbname=client","root","");
    $statement = $pdo->prepare("DELETE FROM form_no_302 WHERE id = ?");
    $statement->execute(array($_REQUEST["id"]));
    header("Location:../displayclient.php");
?>