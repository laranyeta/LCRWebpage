<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - Solar Sprint</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/project-page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="icon" type="image/png" href="img/miscellaneous/favicon.png">
    <style>
      .swiper-button-next, .swiper-button-prev {
        color: var(--text-accent);
      }
    </style>
</head>
<body class="index-page" data-page="solarsprint">
    <div class="aura"></div>
    <?php include 'header.php'; ?>
    <div class="aura"></div>

    <div class="project-detail-container">
        <h1 data-key="solarsprint.title"></h1>

        <div class="project-description">
            <p data-key="solarsprint.description-main"></p>
            <img src="img/projects/solarsprint/solarsprint-main.gif" alt="Solar Sprint main image" class="project-main-img">
        </div>
        <button id="scroll-btn-1" data-key="solarsprint.see-more"></button>
        <br /><br /><br />

        <div class="more-container">
            <img src="img/projects/solarsprint/solarsprint-col.gif" alt="Solar Sprint extra">
            <p data-key="solarsprint.description-extra"></p>
        </div>
        <br /><br/>
        <button id="scroll-btn-2" data-key="solarsprint.see-features"></button>
        <br /><br /><br /><br />

        <div class="features-container">
            <h2 data-key="solarsprint.features-title"></h2>
            <ul>
                <li data-key="solarsprint.features-list.0"></li><br />
                <li data-key="solarsprint.features-list.1"></li><br />
                <li data-key="solarsprint.features-list.2"></li><br />
                <li data-key="solarsprint.features-list.3"></li><br />
                <li data-key="solarsprint.features-list.4"></li><br />
                <li data-key="solarsprint.features-list.5"></li><br />
                <li data-key="solarsprint.features-list.6"></li><br />
                <li data-key="solarsprint.features-list.7"></li><br />
                <li data-key="solarsprint.features-list.8"></li>
            </ul>
        </div>
        
        <button id="scroll-btn-3" data-key="solarsprint.see-gallery"></button>
        
        <div class="gallery-container">
            <h2 data-key="solarsprint.gallery-title"></h2>
            <br /><br /><br />

            <div class="media-grid">
                <div class="media-item">
                    <img src="img/projects/solarsprint/solarsprint-gal1.png" alt="Solar Sprint Gallery 1">
                </div>
                <div class="media-item">
                    <video src="img/projects/solarsprint/solarsprint-gal2.mp4" loop muted></video>
                </div>
                <div class="media-item">
                    <img src="img/projects/solarsprint/solarsprint-gal3.png" alt="Solar Sprint Gallery 3">
                </div>
                <div class="media-item">
                    <img src="img/projects/solarsprint/solarsprint-gal4.png" alt="Solar Sprint Gallery 4">
                </div>
            </div>
            <br />
            <a href="docs/SolarSprint.zip" class="download-button" data-key="solarsprint.download"></a>
            <p data-key="solarsprint.run-instructions"></p>
        </div>
    </div>

    <script src="js/project-scroll.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/lang.js"></script>
</body>
</html>
