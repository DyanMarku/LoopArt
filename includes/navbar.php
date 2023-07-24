<style>
  * {
    font-family: Poppins, sans-serif;
    font-weight: bold;
  }

  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    padding: 0px 0;
  }

  .container {
    padding-top: 80px;
  }
</style>

<header class="main-header">
  <nav class="navbar navbar-static-top" style="background-color: #232323;">
    <div class="container" style="padding-top: 10px; ">
      <div class="navbar-header">

        <a href="index.php" class="navbar-brand" style="margin-top: 10px;">
          <b style="font-size: 30px;">LoopArt</b></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse" style="padding-top:10px; padding-bottom:10px;">
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about_us.php">ABOUT US</a></li>
          <li><a href="contact_us.php">CONTACT US</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" style="background-color: white;">
              <?php

              $conn = $pdo->open();
              try {
                $stmt = $conn->prepare("SELECT * FROM category");
                $stmt->execute();
                foreach ($stmt as $row) {
                  echo "
                      <li><a style='color: black;'  href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></li>
                    ";
                }
              } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
              }

              $pdo->close();

              ?>
            </ul>
          </li>
        </ul>
        <form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
            <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
            <span class="input-group-btn" id="searchBtn" style="display:none;">
              <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
            </span>
          </div>
        </form>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" style="padding-top: 10px; padding-bottom:10px;  ">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">

            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-shopping-cart" style="font-size: 20px; color: #EE4D2D;"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu" style="width: 400px;">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
            </ul>
          </li>

          <?php
          if (isset($_SESSION['user'])) {
            $image = (!empty($user['photo'])) ? 'images/' . $user['photo'] : 'images/profile.jpg';
            echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                    <img src="' . $image . '" class="user-image" alt="User Image">
                    <span class="hidden-xs">' . $user['firstname'] . ' ' . $user['lastname'] . '</span>
                  </a>
                  <ul class="dropdown-menu" style="width: 200px; border-radius: 10px 0 0 0; ">
                    <!-- User image -->
                    <li class="user-header" style="background-color: #383838; border-radius: 10px 0 0 0; "> 
                      <img src="' . $image . '" class="img-circle" alt="User Image">

                      <p>
                        ' . $user['firstname'] . ' ' . $user['lastname'] . '
                        <small>Member since ' . date('M. Y', strtotime($user['created_on'])) . '</small>
                      </p>
                    </li>
                    
                    <li class="user-footer" style="background-color: gray;">
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                      <div class="pull-left" >
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
          } else {
            echo "
                <li><a href='login.php'>LOGIN</a></li>
                <li><a href='signup.php'>SIGNUP</a></li>
              ";
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>