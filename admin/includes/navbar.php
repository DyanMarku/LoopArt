<header class="main-header">



  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="image-admin/loopwhite.png" style="width: 50px;"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="image-admin/loopwhite.png" style="width: 32px; margin-right: 5px; color: #FEFEFA  "><b>@_loop</b>.art</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background-color: #232323;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img style="border:solid gray; " src="<?php echo (!empty($admin['photo'])) ? '../images/' . $admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs" style="color: white; font-weight: bold"><?php echo $admin['firstname'] . ' ' . $admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="background-color: #383838;">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/' . $admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['firstname'] . ' ' . $admin['lastname']; ?>
                <small>Member since <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer" style="background-color: gray;">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn" id="admin_profile" style="background-color: #EE4D2D; color: white; border-color: transparent">Update</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn" style="background-color: #EE4D2D; color: white; border-color: transparent">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>