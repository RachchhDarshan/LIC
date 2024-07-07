<?php

include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

$uid = $_SESSION['USER'];

$statement = $pdo->prepare("SELECT * FROM form_no_302 WHERE User_id=?");
$statement->execute(array($uid));

$record = $statement->fetchAll();

?>

<!-- <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
<div class="container">
<div class="table-responsive">
    <table class="m-auto table table-striped table-hover mt-4 mb-4" border="2" id="mt" align="center" style="overflow-x: hidden;margin-top: 100px;">
        <!-- <thead class="thead-dark"> -->

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <!-- <th>Policy_name</th> -->
                <!-- <th>id_proof</th> -->
                <!-- <th>Birth_date</th> -->
                <th>Delete</th>
                <th>Update</th>
                <th>Fill the form</th>
                </tr>

        </thead>

        <tbody>

            <?php foreach ($record as $r) { ?>
                <tr>
                    <td><?= $r["id"] ?></td>
                    <td><?= $r["Name"] ?></td>
                    <td><?= $r["Age"] ?></td>
                    <td><?= $r["Mobile_number"] ?></td>
                    <td><?= $r["Email"] ?></td>
                    <td><?= $r["Address"] ?></td>
                    <!-- <td><?= $r["Policy_name"] ?></td> -->

                    <!-- <td>
                                            <img src="../images/<?= $r['imagepath'] ?>" class="lic1"
                                                alt="user1" height="20" width="40">
                                        </td> -->
                    <td><a href="./code/client_delete.php?id=<?= $r["id"] ?>">Delete</a></td>
                    <td><a href="./client_update_form.php?id=<?= $r["id"] ?>">Update</a></td>
                    <td><a href="./form_no_302_update_form.php?id=<?= $r["id"] ?>">form_no_302</a></td>


                </tr>
            <?php } ?>

        </tbody>

    </table>
    <div class="row justify-content-end">
        <div class="col-xl-2">
            <a href="./client.php"><input type="button" class="addbtn form-control  border border-primary border-1 mb-3" style="background-color:blue; color:white;" value="Add client"> </input></a>
        </div>
    </div>
</div>
</div>
<?php include("./includes/script.php"); ?>
<!-- <script>
    $(document).ready(function() {
        $('#mt').DataTable();
    });
</script> -->
<?php include("./includes/footer.php"); ?>
</div>