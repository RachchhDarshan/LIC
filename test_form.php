<?php

    print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col-xl-6">
                    <label style="font-weight: bolder; margin-top: 20px;">Enter Address</label>
                    <input type="text" class="form-control border border-primary border-1" placeholder="Enter your address " style="margin-top: 5px;" name="Address">
                </div>
                <div class="col-xl-3" >
                    <label style="font-weight: bolder; margin-top: 20px;">click update Button</label>
                    <button class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top : 60px; margin-left : 5px; margin-top: 4px" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>