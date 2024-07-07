<?php
    $name = $_REQUEST["Name"];
    $age = $_REQUEST["Age"];
    $mobile = $_REQUEST["Mobile_number"];
    $email = $_REQUEST["Email"];
    $address = $_REQUEST["Address"];
    // $policy_name = $_REQUEST["Policy_name"];
    $id = $_REQUEST["id"];

    $pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");
    $statement = $pdo->prepare("UPDATE form_no_302 SET Name = ?,Age = ?,Mobile_number = ?,Email = ?,Address = ? WHERE id = ?");
    $statement->execute(array($name, $age, $mobile, $email, $address, $id )); 
    header("Location:../displayclient.php");

?>