<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .profile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .profile-card {
            flex-basis: 100%;
            max-width: 200px;
            text-align: center;
            margin: 15px;
        }

        .profile-pic {
            width: 100%;
            height: auto;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-name {
            margin-top: 15px;
            color: #EE4D2D;
            font-size: 18px;
        }

        .profile-role {
            margin-top: 5px;
            color: #979797;
            font-weight: 100;
            font-size: 12px;
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
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <h1 style="text-align: center; color: #EE4D2D; font-weight: bold; padding-top: 40px;">MEET THE TEAM</h1>

                        <div class="profile-container">

                            <div class="profile-card">
                                <a href="https://www.facebook.com/akosireymarrr"><img src="images/reymar.jpg" alt="Profile 2" class="profile-pic"></a>
                                <div class="profile-name">Reymar Sison</div>
                                <div class="profile-role">Founder of LoopArt</div>
                            </div>
                            <div class="profile-card">
                                <a href="https://www.facebook.com/Haberrry"><img src="images/haber.jpg" alt="Profile 1" class="profile-pic"></a>
                                <div class="profile-name">Jhon Mark Haber</div>
                                <div class="profile-role">Web Developer</div>
                            </div>
                            <div class="profile-card">
                                <a href="https://www.facebook.com/julianvoltaire.dumaraog"><img src="images/julian.png" alt="Profile 3" class="profile-pic"></a>
                                <div class="profile-name">Julian Voltaire Dumaraog</div>
                                <div class="profile-role">Web Designer</div>
                            </div>
                            <div class="profile-card">
                                <a href="https://www.facebook.com/christianblascandelario"> <img src="images/chris.png" alt="Profile 4" class="profile-pic"></a>
                                <div class="profile-name">Christian Candelario</div>
                                <div class="profile-role">Web Designer</div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>