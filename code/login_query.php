<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");

 if (isset($_POST['login_button'])) 
 {
   $Emailid = $_POST['Emailid'];
   $Password = $_POST['Password'];
   $statement = $pdo->prepare("SELECT * from register where Email_id=? and Password=?");
   $statement->execute(array($Emailid, $Password));
   $record = $statement->fetch();
   $id=$record['id'];
  //  $record

   $row = $statement->rowCount();

   if($row > 0)
   {
    $_SESSION['USER']=$id;  
    header("Location: ../home.php");
   }

   else
   {
    header("Location: ../index.php");
   }
 }

?>