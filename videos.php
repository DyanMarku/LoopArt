<?php include 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<link rel="stylesheet" href="css/videos.css">

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper" align="center" style="padding-top: 150px; padding-bottom: 50px;">

            <div class="video-row">
                <div class="video-container">
                    <video class="video" src="videos/vid1.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>
                
                <div class="video-container">
                    <video class="video" src="videos/vid2.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid3.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid4.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid5.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>
            </div>


            <div class="video-row">
                <div class="video-container">
                    <video class="video" src="videos/vid6.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>


                <div class="video-container">
                    <video class="video" src="videos/vid7.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid8.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid9.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>

                <div class="video-container">
                    <video class="video" src="videos/vid10.mp4" loop></video>
                    <button class="video-play-button"><i class="fa fa-play"></i></button>
                </div>
            </div>
        </div>

    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

<script>
    const videoContainers = document.querySelectorAll(".video-container");

    videoContainers.forEach(container => {
        const video = container.querySelector(".video");
        const playButton = container.querySelector(".video-play-button");

        container.addEventListener("mouseover", () => {
            video.play();
            playButton.style.display = "none";
        });

        container.addEventListener("mouseout", () => {
            video.pause();
            playButton.style.display = "block";
        });

        container.addEventListener("click", () => {
            video.play();
            video.requestFullscreen();
            playButton.style.display = "none";
        });
    });
</script>





</html>