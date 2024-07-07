<?php
include("./includes/header.php");
include("./includes/navbar.php");

?>

<div class="container">
  <form action="./code/client_insert.php" method="POST" class="mt-4 mb-5">

    <div class="row">

      <div class="col-xl-6">
        <label style="font-weight: bolder; margin-top: 20px;">Enter Name</label><input type="textr" name="Name"  style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Your Name ">
      </div>

      <div class="col-xl-6">
        <label style="font-weight: bolder;margin-top: 20px; ">Enter Age</label><input type="number" name="Age"  style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Your Age ">
      </div>

    </div>

    <div class="row">

      <div class="col-xl-6" >
        <label style="font-weight: bolder; margin-top: 20px;">Enter Mobile Number</label><input type="number" name="Mobile_number"  style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Your Mobile-no ">
      </div>

      <div class="col-xl-6" >
        <label style="font-weight: bolder;margin-top: 20px; ">Enter Email-Id</label><input type="email" name="Email"  style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Your Email-Id ">
      </div>

    </div>

    <div class="row">

      <div class="col-xl-6 mb-2" >
        <label style="font-weight: bolder;margin-top: 20px; ">Enter Address</label><input type="text" name="Address" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Your Address ">
      </div>
      <!-- <div class="col-xl-6" >
      <label style="font-weight: bolder; margin-top: 20px;">Enter Policy Name</label><input type="text" name="Policy_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter Policy Name ">
      </div> -->
      <!-- <div class="col-6" style="margin-left: 20px;"> -->
        <!-- <label style="font-weight: bolder; margin-top: 20px;">Enter Address</label><input type="submit" type="submit" style="margin-top: 5px;"></input> -->

        <!-- <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top : 60px; margin-left : 20px" type="submit">Insert</button> -->
      <!-- </div> -->
      <div class="col-xl-3" style="margin-top: 45px;">
      <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top: 15px" type="submit" >Click to Add client</button>
      </div>

    </div>






    </from>

</div>
<?php
include("./includes/script.php");
include("./includes/footer.php");

?>