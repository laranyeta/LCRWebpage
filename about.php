<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LCR - About Me</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" type="image/png" href="img/miscellaneous/favicon.png">
</head>
<body class="about-page" data-page="about">
    <div class="aura aura1"></div>
    <div class="aura aura2"></div>
    <?php include 'header.php'; ?>
    <div class="about" id="about"> 
        <h1>Lara <span>Castillejo</span></h1>
        <div class="about-btn">
            <div class="me-section">
                <div class="about-text">
                    <h2 data-key="about.title"> Computer Science Student | <span> AI specialization  </span></h2>
                    <p data-key="about.description"> Fourth-year Computer Science student with a 
                        specialization in <span>computer vision, data analysis 
                        and artificial intelligence. </span> <br>
                        Always looking for <span>new challenges</span> that help me 
                        grow and apply my knowledge in <span>real-world 
                        projects.</span></p>
                </div>
                <div class="about-img">
                    <img src="img/miscellaneous/me.jpg" alt="Lara Castillejo Roig" width="300">
                    <p data-key="about.age"> <span>23 </span> years old <br> from <span>Barcelona, Spain</span></p>
                </div>
            </div>
            <button id="scroll-exp" data-key="about.skills-btn"> SKILLS </button>
        </div>
    </div>

    <div class="experience" id="experience">
        <h1>Tech <span>Stack</span></h1>
        <section class="skills">
            <div class="software">
                <h2 data-key="experience.software"> Software </h2>
                <div class="software-stack">
                    <div class="software-title" data-tooltip="VSCode">
                        <img src="img/logos/vscode.png" alt="VSCode" width="50vw">
                    </div>
                    <div class="software-title" data-tooltip="MATLAB">
                        <img src="img/logos/matlab.png" alt="MATLAB" width="60vw">
                    </div>
                    <div class="software-title" data-tooltip="CoppeliaSim">
                        <img src="img/logos/copsim.png" alt="CoppeliaSim" width="120vw">
                    </div>
                    <div class="software-title" data-tooltip="VSCommunity">
                        <img src="img/logos/vscom.png" alt="VSCommunity" width="50vw">
                    </div>
                </div>
            </div>

            <div class="languages">  
                <h2 data-key="experience.languages"> Languages </h2>
                <div class="language-stack">
                    <div class="language-title" data-tooltip="Python">
                        <img src="img/logos/python.png" alt="Python" width="50vw">
                        
                    </div>
                    <div class="language-title" data-tooltip="C++">
                        <img src="img/logos/cpp.png" alt="C++" width="50vw">
                        
                    </div>
                    <div class="language-title" data-tooltip="PHP">
                        <img src="img/logos/php.png" alt="PHP" width="80vw">
                        
                    </div>
                    <div class="language-title" data-tooltip="HTML5">
                        <img src="img/logos/html.png" alt="HTML5" width="60vw">
                        
                    </div>
                    <div class="language-title" data-tooltip="CSS">
                        <img src="img/logos/css.png" alt="CSS" width="40vw">
                       
                    </div>
                    <div class="language-title" data-tooltip="JavaScript">
                        <img src="img/logos/js.png" alt="JavaScript" width="60vw">
                       
                    </div>
                    <div class="language-title" data-tooltip="SQL">
                        <img src="img/logos/sql.png" alt="SQL" width="80vw">
                        
                    </div>
                </div>
            </div>

            <div class="libraries">
                <h2 data-key="experience.libraries"> Libraries </h2>
                <div class="library-stack">
                    <div class="library-title" data-tooltip="Ultralytics">
                        <img src="img/logos/ultralytics.svg" alt="Ultralytics" width="50vw">
                       
                    </div>
                    <div class="library-title" data-tooltip="TensorFlow">
                        <img src="img/logos/tensorflow.png" alt="TensorFlow" width="50vw">
                        
                    </div>
                    <div class="library-title" data-tooltip="OpenCV">
                        <img src="img/logos/opencv.png" alt="OpenCV" width="40vw">
                        
                    </div>
                    <div class="library-title" data-tooltip="OpenGL">
                        <img src="img/logos/opengl.png" alt="OpenGL" width="75vw">
                        
                    </div>
                    <div class="library-title" data-tooltip="Scikit-learn">
                        <img src="img/logos/scikit.png" alt="Scikit-learn" width="75vw">
                       
                    </div>
                </div>
            </div>

        </section>
    </div>

   
    <script src="js/about-page-scroll.js"></script>
    <script src="js/lang.js"></script>
</body>
</html>