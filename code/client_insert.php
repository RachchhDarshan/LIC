<?php
    session_start();
    $name = $_REQUEST["Name"];
    $age = $_REQUEST["Age"];
    $mobile = $_REQUEST["Mobile_number"];
    $email = $_REQUEST["Email"];
    $address = $_REQUEST["Address"];
    // $policy_name = $_REQUEST["Policy_name"];
    $uid=$_SESSION['USER'];

    // $birth_date = $_REQUEST["Birth_date"];
    // $image = $_REQUEST["Image"];

    $pdo = new PDO("mysql:host=localhost;dbname=client","root","");
    $statement =  $pdo->prepare("INSERT INTO form_no_302 (Name, Age, Mobile_number, Email,Address,USER_id) VALUES(?,?,?,?,?,?)");
    $statement->execute(array($name, $age, $mobile, $email,$address,$uid));
    header("Location:../displayclient.php");
?>