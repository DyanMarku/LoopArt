<style>
  body {
    background-color: #383838;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  img {
    width: 100px;
    display: block;
    /* Change to block for better responsiveness */
    margin: 0 auto;
    /* Center the image */
    margin-bottom: 20px;
  }

  .login-box {
    max-width: 400px;
    border-radius: 10px;
    background-color: #fff;
    padding: 20px;
    box-shadow: -10px 10px 31px 1px rgba(0, 0, 0, 0.49);
    -webkit-box-shadow: -10px 10px 31px 1px rgba(0, 0, 0, 0.49);
    -moz-box-shadow: -10px 10px 31px 1px rgba(0, 0, 0, 0.49);
  }

  .login-box-msg {
    text-align: center;
  }

  .form-group.has-feedback {
    position: relative;
  }

  .form-control-feedback {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
  }

  .btn {
    background-color: #EE4D2D;
    border-color: transparent;
    color: #fff;
  }

  /* Media queries for responsiveness */
  @media (max-width: 600px) {
    .login-box {
      max-width: 90%;
      /* Adjust the login box width for smaller screens */
    }
  }
</style>

<?php include 'includes/session.php'; ?>
<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page" style="background-color: #383838;">
  <div class="login-box">
    <?php
    if (isset($_SESSION['error'])) {
      echo "
          <div class='callout callout-danger text-center'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
      unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
      echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p> 
          </div>
        ";
      unset($_SESSION['success']);
    }
    ?>


    <div class="login-box-body" style="border-radius: 10px; height: 400px; width: auto">
      <p class="login-box-msg">Sign in to start your session</p>

      <img src="images/LOOP.png" alt="">

      <form action="verify.php" method="POST">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback" style="margin-top: 18px; color:#EE4D2D"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback" style="margin-top: 18px; color:#EE4D2D"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" style="background-color: #EE4D2D; border-color: transparent; width: auto;"><i class="fa fa-sign-in"></i> Sign In</button>
          </div>
        </div>
      </form>
      <br>
      <a href="signup.php" class="text-center" style="color: #EE4D2D;">Register a new membership</a><br>
      <a href="index.php" style="color: #EE4D2D;"><i class="fa fa-home" style="color: #EE4D2D;"></i> Home</a>
    </div>
  </div>

  <?php include 'includes/scripts.php' ?>
</body>

</html>