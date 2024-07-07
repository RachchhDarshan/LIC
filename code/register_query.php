<?php

    $pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");

        if (isset($_POST['register_btn'])) 
        {
           $Name = $_POST['Name'];
           $Password = $_POST['Password'];
           $Email_id = $_POST['Email_id'];
           $Mobile_number = $_POST['Mobile_number'];
        
           $statement = $pdo->prepare("INSERT INTO register(Name , Password , Email_id , Mobile_number) values(? , ? , ? , ?)");
           $statement->execute(array($Name , $Password , $Email_id , $Mobile_number));
           header("Location:../index.php");
        }
?>