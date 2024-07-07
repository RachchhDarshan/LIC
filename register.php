

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e489468df6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-7">

                <div class="login-form">

                    <form action="./code/register_query.php" method="POST">

                        <div class="form-name">

                            <span>Register</span>

                        </div>

                        <div class="form-group">
                            <input required type="text" class="form-control item" id="name" placeholder="User Name" name="Name" >
                            <input required type="password" class="form-control item" id="password" placeholder="Password" name="Password" > 
                            <input required type="text" class="form-control item" id="emailid" placeholder="Email-id" name="Email_id" >
                            <input required type="text" class="form-control item" id="Mobile Number" placeholder="Mobile number" name="Mobile_number" >
                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-block login-account" name="register_btn">Register</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="text-center col-xl-5">
                <img src="./images/mainlogo.png" alt="image" class="img-fluit" style="height: 420px;margin-top: 130px;">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>