<header>
    <div class="header-content">
        <div class="header-logo">
            <img src="img/miscellaneous/logo.png" width="110vw" alt="Logo">
        </div>
        <div class="header-nav">
            <nav id="navbar">
                <ul>
                    <li><a href="index.php" data-key="menu.home" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" data-key="menu.about-me" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About me</a></li>
                    <li><a href="projects.php" data-key="menu.projects" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>">Projects</a></li>
                    <li><a href="contact.php" data-key="menu.contact" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="language-selector">
            <img src="img/flags/uk.png" class="lang-btn" data-lang="en" alt="English" width="25">
            <img src="img/flags/es.png" class="lang-btn" data-lang="es" alt="Español" width="25">
            <img src="img/flags/cat.png" class="lang-btn" data-lang="cat" alt="Català" width="25">
        </div>
        
    </div>
</header>
