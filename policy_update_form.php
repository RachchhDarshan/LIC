<?php

include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

$statement = $pdo->prepare("SELECT * FROM policy WHERE id=?");
$statement->execute(array($_REQUEST["id"]));
$record = $statement->fetchAll()[0];

?>
<!-- <div class="site-blocks-cover inner-page overlay" style="background-image:url(images/xhero_bg_1.jpg.pagespeed.ic.fiXE7wVGSO.jpg)" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-7 text-center" data-aos="fade">
      <h1 class="text-uppercase">Insurances</h1>
      <span class="caption d-block text-white">An Insurance Company</span>
    </div>
  </div>
</div> -->
<div class="container">

  <form action="./code/policy_update_query.php" method="POST">

    <div class="row">

      <div class="col-xl-4">

        <input type="hidden" name="id" value="<?= $record["id"] ?>">
        <label style="font-weight: bolder; margin-top: 20px;">Enter Policy Name</label><input type="text" name="policy_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Policy Name " value="<?= $record["policy_name"] ?>">
        <label style="font-weight: bolder;margin-top: 20px;">Enter Policy</label> <textarea name="policy_detail" class="form-control border border-primary border-1" style="margin-top: 5px; height: 200px;" placeholder="Enter policy detail "> <?= $record['policy_detail'] ?></textarea>
        <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top: 15px" type="submit">Update policy</button>

      </div>
      <div class="text-center col-xl-8">
        <img src="./images/new2.png" alt="image" class="mt-4 img-fluit mb-4" style="height: 420px;">
      </div>
    </div>

</div>

</div>
</from>

</div>

<?php

include("./includes/script.php");
include("./includes/footer.php");

?>