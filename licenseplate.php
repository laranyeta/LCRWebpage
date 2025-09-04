<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - Car Plate Recognition</title>
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
<body class="index-page" data-page="licenseplate">
    <div class="aura"></div>
    <?php include 'header.php'; ?>
    <div class="aura"></div>

    <div class="project-detail-container">
        <h1 data-key="licenseplate.title"></h1>

        <div class="project-description">
            <p data-key="licenseplate.description-main"></p>
            <img src="img/projects/license/licenseplate-main.png" alt="Car Plate Recognition main image" class="project-main-img">
        </div>
        <button id="scroll-btn-1" data-key="licenseplate.see-more"></button>
        <br /><br /><br />

        <div class="more-container">
            <img src="img/projects/license/licenseplate-class.png" alt="Car Plate Recognition extra">
            <p data-key="licenseplate.description-extra"></p>
        </div>
        <br /><br/>
        <button id="scroll-btn-2" data-key="licenseplate.see-features"></button>
        <br /><br /><br /><br />

        <div class="features-container">
            <h2 data-key="licenseplate.features-title"></h2>
            <ul>
                <li data-key="licenseplate.features-list.0"></li><br />
                <li data-key="licenseplate.features-list.1"></li><br />
                <li data-key="licenseplate.features-list.2"></li><br />
                <li data-key="licenseplate.features-list.3"></li><br />
                <li data-key="licenseplate.features-list.4"></li><br />
                <li data-key="licenseplate.features-list.5"></li><br />
                <li data-key="licenseplate.features-list.6"></li><br />
                <li data-key="licenseplate.features-list.7"></li><br />
                <li data-key="licenseplate.features-list.8"></li>
            </ul>
        </div>
        
        <button id="scroll-btn-3" data-key="licenseplate.see-paper"></button>
    </div>

    <script src="js/project-scroll.js"></script>
    <script>
        document.getElementById("scroll-btn-3").addEventListener("click", function() {
            window.open("docs/licenseplate-paper.pdf", "_blank");
        });
    </script>
    <script src="js/lang.js"></script>
</body>
</html>
