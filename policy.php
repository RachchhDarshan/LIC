<?php

include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

?>
<!-- <div class="site-blocks-cover inner-page overlay" style="background-image:url(./images/bullding.jpg)" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-7 text-center" data-aos="fade">
      <h1 class="text-uppercase">Insurances</h1>
      <span class="caption d-block text-white">An Insurance Company</span>
    </div>
  </div>
</div> -->
<div class="container">

  <form action="./code/policy_insert.php" method="POST">

    <div class="row">

      <div class="col-xl-4">
        <label style="font-weight: bolder; margin-top: 20px;color:orangered">Enter Policy Name</label><input type="text" name="policy_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Policy Name ">
        <label style="font-weight: bolder;margin-top: 20px;color:orangered">Enter Policy Details</label> <textarea name="policy_detail" class="form-control border border-primary border-1" style="margin-top: 5px; height: 200px;" placeholder="Enter policy detail "></textarea>
        <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top: 15px" type="submit">Add policy</button>

      </div>
      <div class="text-center col-xl-8">
        <img src="./images/mainlogo.png" alt="image" class="mt-4 img-fluit mb-4" style="height: 420px;">
      </div>
    </div>
  </from>
</div>



<?php

include("./includes/script.php");
include("./includes/footer.php");

?>
</div>
