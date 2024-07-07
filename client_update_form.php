<?php
include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

$statement = $pdo->prepare("SELECT * FROM form_no_302 WHERE id=?");
$statement->execute(array($_REQUEST["id"]));
$record = $statement->fetchAll()[0];

?>

<div class="container">
    <form action="./code/client_update_query.php" method="POST" class="mb-4 mt-5">

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">Enter Name</label><input type="text" class="form-control border border-primary border-1" placeholder="Enter Name " style="margin-top: 5px;" name="Name" value="<?= $record["Name"] ?>">
            </div>

            <div class="col-xl-6" >
                <label style="font-weight: bolder;margin-top: 20px; ">Enter Age</label> <input type="number" class="form-control border border-primary border-1" placeholder="Enter Age " style="margin-top: 5px;" name="Age" value="<?= $record["Age"] ?>">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">Enter Mobile Number</label> <input type="text" class="form-control border border-primary border-1" placeholder="Enter Mobile-no " style="margin-top: 5px;" name="Mobile_number" value="<?= $record["Mobile_number"] ?>">

            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">Enter Email-Id</label> <input type="text" class="form-control border border-primary border-1" placeholder="Email-id "  style="margin-top: 5px;" name="Email" value="<?= $record["Email"] ?>">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">Enter Address</label>
                <input type="text" class="form-control border border-primary border-1" placeholder="Enter your address " style="margin-top: 5px;" name="Address" value="<?= $record["Address"] ?>">
            </div>
            <div class="col-xl-6" >
                <label style="font-weight: bolder; margin-top: 20px;">Enter Policy Name</label>
                <input type="text" name="Policy_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter policy name " ફોન નંબર>
            </div>
            <div class="mb-3 mx-3">
                <input type="hidden" name="id" value="<?= $record["id"] ?>">
            </div>

            <div class="col-xl-3 mb-3" >
                <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top : 60px; margin-left : 5px; margin-top: 4px" type="submit">Update</button>
            </div>

        </div>
    </form>
</div>  


        <?php
        include("./includes/script.php");
        include("./includes/footer.php");

        ?>