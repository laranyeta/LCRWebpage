<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - Spotify Song Attributes</title>
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
<body class="index-page" data-page="kaggle">
    <div class="aura"></div>
    <?php include 'header.php'; ?>
    <div class="aura"></div>

    <div class="project-detail-container">
        <h1 data-key="kaggle.title"></h1>

        <div class="project-description">
            <p data-key="kaggle.description-main"></p>
            <img src="img/projects/kaggle/spotify-main.png" alt="Spotify Song Attributes main image" class="project-main-img">
        </div>
        <button id="scroll-btn-1" data-key="kaggle.see-more"></button>
        <br /> <br /> <br />

        <div class="more-container">
            <img src="img/projects/kaggle/spotify-sec.png" alt="Spotify Song Attributes secondary image">
            <p data-key="kaggle.description-extra"></p>
        </div>
        <br /><br/>
        <button id="scroll-btn-2" data-key="kaggle.see-features"></button>
        <br /> <br /> <br /> <br />

        <div class="features-container">
            <h2 data-key="kaggle.features-title"></h2>
            <ul>
                <li data-key="kaggle.features-list.0"></li><br />
                <li data-key="kaggle.features-list.1"></li><br />
                <li data-key="kaggle.features-list.2"></li><br />
                <li data-key="kaggle.features-list.3"></li><br />
                <li data-key="kaggle.features-list.4"></li><br />
                <li data-key="kaggle.features-list.5"></li><br />
                <li data-key="kaggle.features-list.6"></li><br />
                <li data-key="kaggle.features-list.7"></li><br />
                <li data-key="kaggle.features-list.8"></li>
            </ul>
        </div>
        
        <button id="scroll-btn-3">
            <a href="docs/spotify-song-attributes.ipynb" download="spotify_song_attributes.ipynb" style="text-decoration:none; color:inherit;" data-key="kaggle.download"></a>
        </button>
    </div>

    <script src="js/project-scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script src="js/lang.js"></script>
</body>
</html>
