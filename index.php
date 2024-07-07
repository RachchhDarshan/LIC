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
  <script src="./js/jquery-3.3.1.min.js"></script>
  <title>LIC</title>
</head>

<body>

<div class="main">
    
    <div class="container">
      <div class="row mt-4">
        <div class="col-xl-7 col-sm-7">

          <div class="login-form">

            <form action="./code/login_query.php" method="POST">

              <div class="form-name">

                <span class="text-uppercase site-section-heading text-uppercase text-center font-secondary">Log-In</span>

              </div>

              <div class="form-group">

                <input type="email" class="form-control item" id="Username" placeholder="Email_id" name="Emailid">

                <input type="password" class="form-control item" id="Password" placeholder="Password" name="Password">

              </div>

              <div class="form-group text-center">

                <button type="submit" class="btn btn-block login-account " name="login_button">Login</button>
                <a href="register.php" style="color:orangered;">Register</a>

              </div>
            </form>

            <div class="social-media">

              <h5>Login With</h5>

              <div class="social-icons">

                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>

              </div>
            </div>

          </div>
        </div>
        <div class="text-center col-xl-5 col-sm-5 mt-5">
          <img src="./images/mainlogo.png" alt="image" class="img-fluit" style="height: 420px;">
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script type="text/javascript">
    function preventBack() {
      window.history.forward();
    }
    setTimeout("preventBack()", null);
    window.onunload = function() {
      null
    };
  </script>
</body>


</html>