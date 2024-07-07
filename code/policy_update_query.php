<?php
    $policy_name = $_REQUEST["policy_name"];
    $policy_detail = $_REQUEST["policy_detail"];
    $id = $_REQUEST["id"];

    $pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");
    $statement = $pdo->prepare("UPDATE policy SET policy_name = ?,policy_detail = ? WHERE id = ?");
    $statement->execute(array($policy_name, $policy_detail, $id)); 
    header("Location:../insurance.php");

?>