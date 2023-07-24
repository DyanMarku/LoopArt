<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/about_us.css" />


    <style>
        .profile-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 1px;
            margin-top: 20px;
        }

        @media only screen and (min-width: 576px) {
            .profile-card {
                flex-basis: calc(50% - 30px);
                max-width: 300px;
            }
        }

        @media only screen and (min-width: 992px) {
            .profile-card {
                flex-basis: calc(33.33% - 30px);
                max-width: 300px;
            }
        }
    </style>

    <?php include 'includes/session.php'; ?>
    <?php include 'includes/header.php'; ?>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper">
        <div class="container">
            <!-- Main content -->

            <h1 style="text-align: center; color: #EE4D2D; font-weight: bold; padding-top: 40px;">MEET THE TEAM</h1>
            <div class="profile-container">

                <div class="photo-card">
                    <div class="profile-card-outer">
                        <div class="profile-card-inner">
                            <a href="https://www.facebook.com/akosireymarrr">
                                <img title="Reymar Sison" src="images/reymar.jpg" alt="Profile 2" class="profile-pic">
                            </a>
                            <a href="https://www.facebook.com/akosireymarrr" target="_blank">
                                <img title="Reymar Sison" src="images/reymar.jpg" alt="Profile 2" class="profile-pic-hover">
                            </a>
                        </div>
                    </div>
                    <div class="profile-name">Reymar Sison</div>
                    <div class="profile-role">Founder of LoopArt</div>
                </div>

                <div class="photo-card">
                    <div class="profile-card-outer">
                        <div class="profile-card-inner">
                            <a href="https://www.facebook.com/Haberrry">
                                <img title="Jhon Mark Haber" src="images/haber.jpg" alt="Profile 1" class="profile-pic">
                            </a>
                            <a href="https://www.facebook.com/Haberrry" target="_blank">
                                <img title="Jhon Mark Haber" src="images/haber.jpg" alt="Profile 1" class="profile-pic-hover">
                            </a>
                        </div>
                    </div>
                    <div class="profile-name">Jhon Mark Haber</div>
                    <div class="profile-role">Web Developer</div>
                </div>

                <div class="photo-card">
                    <div class="profile-card-outer">
                        <div class="profile-card-inner">
                            <a href="https://www.facebook.com/julianvoltaire.dumaraog">
                                <img title="Julian Voltaire Dumaraog" src="images/julian.png" alt="Profile 3" class="profile-pic">
                            </a>
                            <a href="https://www.facebook.com/julianvoltaire.dumaraog" target="_blank">
                                <img title="Julian Voltaire Dumaraog" src="images/julian.png" alt="Profile 3" class="profile-pic-hover">
                            </a>
                        </div>
                    </div>
                    <div class="profile-name">Julian Voltaire Dumaraog</div>
                    <div class="profile-role">Web Designer</div>
                </div>

                <div class="photo-card">
                    <div class="profile-card-outer">
                        <div class="profile-card-inner">
                            <a href="https://www.facebook.com/christianblascandelario">
                                <img title="Christian Candelario" src="images/chris.png" alt="Profile 4" class="profile-pic">
                            </a>
                            <a href="https://www.facebook.com/christianblascandelario" target="_blank">
                                <img title="Christian Candelario" src="images/chris.png" alt="Profile 4" class="profile-pic-hover">
                            </a>
                        </div>
                    </div>
                    <div class="profile-name">Christian Candelario</div>
                    <div class="profile-role">Web Designer</div>
                </div>

            </div>

        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>