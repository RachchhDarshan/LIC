<?php
    session_start();
    $policy_name = $_REQUEST["policy_name"];
    $policy_detail = $_REQUEST["policy_detail"];
    $uid=$_SESSION['USER'];

    $pdo = new PDO("mysql:host=localhost;dbname=client","root","");
    $statement =  $pdo->prepare("INSERT INTO policy (policy_name,policy_detail,USER_id) VALUES(?,?,?)");
    $statement->execute(array($policy_name,$policy_detail,$uid));
    header("Location:../insurance.php");
?>