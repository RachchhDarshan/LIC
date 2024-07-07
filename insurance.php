<?php
include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

$uid=$_SESSION['USER'];

$statement = $pdo->prepare("SELECT * FROM policy WHERE User_id=?");
$statement->execute(array($uid));

$records = $statement->fetchAll();
?>

<div class="row">
  <?php
  foreach ($records as $r) {
  ?>
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-2 p-4">
      <div class="card" style="background:black;box-shadow: 5px 1px 10px gray;height: 200px;">
        <div class="card-header" style="color: white;"><?= $r["policy_name"] ?></div>
        <div class="card-body" style="color: white; font-weight:600;">
          <?= substr($r["policy_detail"], 0, 90) . "..." ?>
        </div>
        <div class="card-footer">
          <button type="button" class="btn" style="background-color: orange;" data-bs-toggle="modal" data-bs-target="#readmore-<?= $r["id"] ?>">
            Read More</button>
        </div>
      </div>
      <div class="modal fade" id="readmore-<?= $r["id"] ?>" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-white">
            <p class="card-text "><?= $r["policy_detail"] ?></p>
          </div>
          <div class="modal-content bg-white">
            <a role="button" href="./code/policy_delete.php?id=<?= $r['id'] ?>" class="btn" style="background:black; color:white; border-color: blue; font-weight: bold">Delete</a>
            <a role="button" href="policy_update_form.php?id=<?= $r['id'] ?>" class="btn btn-primary" style="border-color: #b3c6ff; font-weight: bold">Update</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  
<div class="row justify-content-end">
        <div class="col-xl-2">
            <a href="./policy.php"><input type="button" class="addbtn form-control  border border-primary border-1 mb-2" style="background-color:blue; color:white;" value="Add Insurance"> </input></a>
        </div>
    </div>
</div>
<?php
include("./includes/script.php");
include("./includes/footer.php");

?>