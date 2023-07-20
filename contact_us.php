<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            color: white;
        }

        .contact-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact-in {
            flex-basis: 100%;
            margin-top: 90px;
            /* Adjust the width of the left section as needed */
        }

        @media only screen and (min-width: 768px) {
            .contact-in {
                flex-basis: 45%;
            }
        }

        iframe {
            margin-top: 10px;
        }

        i {
            color: #EE4D2D;
        }
    </style>

    <?php include 'includes/session.php'; ?>
    <?php include 'includes/header.php'; ?>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container">
                <div class="contact-wrap">
                    <div class="contact-in">
                        <h1 style="padding-bottom: 20px; font-weight: bold; color: white;">CONTACT INFO</h1>
                        <h4 style="font-weight: bold;"><i class="fa fa-phone" aria-hidden="true"></i> Phone</h4>
                        <p style="font-weight: 200; padding-bottom: 20px;">123-456-789</p>
                        <h4 style="font-weight: bold;"><i class="fa fa-envelope" aria-hidden="true"></i> Email</h4>
                        <p style="font-weight: 200; padding-bottom: 20px;">loopart@democompany.com</p>
                        <h4 style="font-weight: bold;"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h4>
                        <p style="font-weight: 200; padding-bottom: 50px;">Teresa St. Anonas, Sta. Mesa, Manila</p>
                        <div class="icons" style="font-size: 30px; padding-top: 20px;">
                            <a href="https://www.facebook.com/loop.arrtt?mibextid=ZbWKwL" style="margin-right: 20px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/_loop.art?igshid=MzRlODBiNWFlZA==" style="margin-right: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://www.tiktok.com/@_loop.art?_t=8e6sDv8Cxj0&_r=1"><img src="images/tiktok.png" style="width: 23px;"></a>
                        </div>
                    </div>

                    <div class="contact-in">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1147.8787712838919!2d121.01213592260925!3d14.599726623727873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9dd976ededf%3A0xbaaa357c5585b8c2!2sPolytechnic%20University%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1689736755659!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>

</body>

</html>