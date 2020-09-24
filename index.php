<!DOCTYPE html>
<html lang="fr">
	
<?php include 'head.php';?>

<body>

<?php include 'header.php';?>

<main>

    <div id="first_div">

        <!-- Video by Pressmaster from Pexels.com -->
        <div id="video-div">
            <video autoplay muted loop id="myVideo" width="100%">
                <source src="assets/vid/background.mp4" type="video/mp4">
            </video>

            <div id="video-title">
                <h1>Hello World</h1>
            </div>
        </div>

    </div>

    <div id="second_div">
        <h1 id="resume-title">Resume</h1>
        <div id="profil-div">
            <img id="profil-pic" src="assets/img/photo-max.jpg" alt="Photo de profil" width="300" height="300">
        </div>
        <div id="resume">
            <div id="resume-text">
                <h1 id="resume-name">Maxime Regnault</h1>
                <h1 id="resume-job">Web Developer / Java Developer</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias cupiditate natus nostrum fugiat consequatur tempore rerum illum aliquam autem perferendis fuga, voluptas voluptatum voluptatem! Officia odio perspiciatis modi at!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, laboriosam accusamus optio repellendus dicta eligendi velit voluptatibus ratione. Blanditiis enim voluptas molestiae veritatis quasi commodi optio inventore quas eveniet corporis?</p>
            </div>
        </div>
        <h1 id="skills-title">Skills</h1>
    </div>

        <div id="skills">
            <!-- <h1>Skills</h1> -->
            <div class="skills-container" id="skill-html">
                <img class="img-pic" src="assets/img/html.png" alt="html picture" width="300" height="300">
            </div>

            <div class="skills-container" id="skill-css">
                <img class="img-pic" src="assets/img/css.png" alt="html picture" height="300">
            </div>

            <div class="skills-container" id="skill-javascript">
                <img class="img-pic" src="assets/img/javass.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-php">
                <img class="img-pic" src="assets/img/php.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-java">
                <img class="img-pic" src="assets/img/java.png" alt="html picture" height="300">
            </div>

            <div class="skills-container" id="skill-sql">
                <img class="img-pic" src="assets/img/mysql.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-jquery">
                <img class="img-pic" src="assets/img/jqueryt.png" alt="html picture" height="300">
            </div>

            <div class="skills-container" id="skill-android">
                <img class="img-pic" src="assets/img/android.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-git">
                <img class="img-pic" src="assets/img/git.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-github">
                <img class="img-pic" src="assets/img/githubo.png" alt="html picture" width="300">
            </div>

        </div>

    <div id="fourth_div">
        <h1 id="projects-title">Projects</h1>
        <!-- <div id="fourth-container"> -->
            
            <div id="card-container">
                <div class="card-project">
                    <div class="card-text">
                        <i class="fas fa-globe"></i>
                        <h1>Atelier à façon</h1>
                        <p>E-boutique d'une auto-entreprise de couture sur mesure.</p>
                        <button>Lien GitHub</button>
                    </div>
                </div>

                <div class="card-project">
                    <div class="card-text">
                        <i class="fas fa-globe"></i>
                        <h1>Portfolio</h1>
                        <p>Projet de portfolio personnel sur lequel vous vous trouvez actuellement.</p>
                        <button>Lien GitHub</button>
                    </div>
                </div>

                <div class="card-project">
                    <div class="card-text">
                        <i class="fas fa-desktop"></i>
                        <h1>Projet MVC</h1>
                        <p>Projet Java J2E d'une application d'entreprise, en architecture MVC</p>
                        <button>Lien GitHub</button>
                    </div>
                </div>

                <div class="card-project">
                    <div class="card-text">
                        <i class="fas fa-mobile-alt"></i>
                        <h1>App Android Calculatrice</h1>
                        <p>Application Android de calculatrice réalisée avec AndroidStudio et Java</p>
                        <button>Lien GitHub</button>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        

    </div>

</main>

    <?php include 'footer.php';?>

</body>

<script src="assets/js/menu.js"></script>
</html>