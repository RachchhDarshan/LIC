<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <div class="site-navbar-wrap js-site-navbar bg-white">
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
            <div class="col-1">
              <h2 class="mb-1 site-logo text-uppercase site-section-heading text-uppercase text-center font-secondary"><a href="index.php" class="font-weight-bold">LIC </a></h>
            </div>
            <div class="col-11">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-2"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3" style="margin-left: 70px;"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block" style="margin-left: 100px;">
                    <li><a href="home.php">
                        <h5 style="color: orangered; font-weight: lighter;">Home</h5>
                      </a></li>
                      <li><a href="./insurance.php">
                        <h5 style="color: gray; font-weight: lighter;">insurance</h5>
                      </a></li>
                    <li><a href="./displayclient.php">
                        <h5 style="color: gray; font-weight: lighter;">Client</h5>
                      </a></li>
                    <li class="active"><a href="agent.php">
                        <h5 style="color: gray; font-weight: lighter;">Agent</h5>
                      </a></li>
                    <li><a href="./success.php">
                        <h5 style="color: gray; font-weight: lighter;">Form no. 302</h5>
                      </a></li>
                    <li><a href="about.php">
                        <h5 style="color: orangered; font-weight: lighter;">About</h5>
                      </a></li>
                      <?php
                      if(isset($_SESSION['USER']))
                      {
                        $id=$_SESSION['USER'];
                        $pdo = new PDO("mysql:host=localhost;dbname=client","root","");
                        $statement= $pdo->prepare("SELECT * FROM register WHERE id=?");
                        $statement->execute(array($id));
                        $row = $statement->fetch();
                        
                      ?>
                    <li><a href="./logoutdesign.php">
                        <h5 style="color: blue; font-weight: lighter;">active User :- <?=$row['Name']?></h5>
                      </a></li>
                      <?php
                      }
                      ?>
                    <!-- <li><a href="client .php">client</a></li> -->
                    <!-- <li><a href="contact.html"><span
                          class="d-inline-block p-3 bg-primary text-white btn btn-primary">Get A Quote</span></a></li> -->
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>