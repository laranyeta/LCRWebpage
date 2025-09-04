<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - Robocat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/project-page.css">
    <link rel="icon" type="image/png" href="img/miscellaneous/favicon.png">
</head>
<body class="index-page" data-page="robocat">
    <div class="aura"></div>
    <?php include 'header.php'; ?>
    <div class="aura"></div>

    <div class="project-detail-container">
        <h1 data-key="robocat.title"></h1>

        <div class="project-description">
            <p data-key="robocat.description-main"></p>
            <img src="img/projects/robocat/robogif.gif" alt="Robocat main image" class="project-main-img">
        </div>
        <button id="scroll-btn-1" data-key="robocat.see-more"></button>
        <br /><br /><br />

        <div class="more-container">
            <img src="img/projects/robocat/walkinggif.gif" alt="Robocat walking">
            <p data-key="robocat.description-extra"></p>
        </div>
        <br /><br/>
        <button id="scroll-btn-2" data-key="robocat.see-features"></button>
        <br /><br /><br /><br />

        <div class="features-container">
            <h2 data-key="robocat.features-title"></h2>
            <ul>
                <li data-key="robocat.features-list.0"></li><br />
                <li data-key="robocat.features-list.1"></li><br />
                <li data-key="robocat.features-list.2"></li><br />
                <li data-key="robocat.features-list.3"></li><br />
                <li data-key="robocat.features-list.4"></li><br />
                <li data-key="robocat.features-list.5"></li><br />
                <li data-key="robocat.features-list.6"></li>
            </ul>
        </div>
        
        <button id="scroll-btn-3" data-key="robocat.see-video"></button>
        
        <div class="gallery-container">
            <br /><br /><br />
            <div class="media-grid">
                <div class="media-item large">
                    <video src="img/projects/robocat/robocat-video.mp4"></video>
                </div>
            </div>
        </div>
    </div>

    <script src="js/project-scroll.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/lang.js"></script>
</body>
</html>
