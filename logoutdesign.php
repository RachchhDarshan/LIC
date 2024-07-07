<?php
include("./includes/header.php");
include("./includes/navbar.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/logout.css">
<div class="card g-2" style="margin-bottom: 20px; margin-top: 80px;">
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");
    if (isset($_SESSION['USER'])) {
        // get current logged in user   
        $userid = $_SESSION['USER'];
        $statementuser = $pdo->prepare("SELECT * from register where id=?");
        $statementuser->execute(array($userid));
        while ($record = $statementuser->fetch()) {
            $currentusername = $record['Name'];
            $currentemail = $record['Email_id'];
            $currentusermobial = $record['Mobile_number'];
        }
    }
    ?>
    <img src="./images/profile.jpg" alt="John" style="width:90%">
    
    Username: <h5><?= $currentusername; ?></h5>
    Email: <h5><?= $currentemail; ?></h5>
    Mobile no:<h5><?= $currentusermobial; ?></h5>
    <h5>----------------------------------------</h5>
    <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
    <a href="#" class="p-2"><span class="icon-twitter"></span></a>
    <a href="#" class="p-2"><span class="icon-instagram"></span></a>
    <a href="#" class="p-2"><span class="icon-vimeo"></span></a>
    <p><a href="./logout.php"><button>Log-Out</button></a></p>
</div>
<br><br><br><br>

<?php
include("./includes/script.php");
?>