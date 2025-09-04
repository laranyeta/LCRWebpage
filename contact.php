<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - Contact Me</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" type="image/png" href="img/miscellaneous/favicon.png">
</head>
<body class="index-page" data-page="contact">
    <div class="aura"></div>
    <?php include 'header.php'; ?>
    
    <section class="contact-section">
        <h1 data-key="contact.title"></h1>
        <p data-key="contact.description"></p>

        <form class="contact-form" action="sendform.php" method="POST">
            <input type="text" name="name" placeholder="" data-key-placeholder="contact.form.name" required>
            <input type="email" name="email" placeholder="" data-key-placeholder="contact.form.email" required>
            <textarea name="message" placeholder="" data-key-placeholder="contact.form.message" required></textarea>
            <button id="sendBtn" type="submit" data-key="contact.form.send"></button>
        </form>
        <p data-key="contact.fallback"></p>
        
        <div id="contactPopup" class="popup">
            <div class="popup-content" id="popupContent">
                <h2 id="popupTitle" data-key="contact.popup.title"></h2>
                <p id="popupMessage" data-key="contact.popup.message"></p>
            </div>
        </div>

    </section>
    <script src="js/contact-popup.js"></script>
    <script src="js/lang.js"></script>
</body>
</html>
