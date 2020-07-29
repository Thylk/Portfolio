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

        <div id="resume">
            <h1 id="resume-name">Maxime Regnault</h1>
            <h1 id="resume-job">Web Developer / Java Developer</h1>
            <div id="resume-bio">
                <img id="profil-pic" src="assets/img/photo-max.jpg" alt="Photo de profil" width="300" height="300">
                <div id="resume-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias cupiditate natus nostrum fugiat consequatur tempore rerum illum aliquam autem perferendis fuga, voluptas voluptatum voluptatem! Officia odio perspiciatis modi at!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, laboriosam accusamus optio repellendus dicta eligendi velit voluptatibus ratione. Blanditiis enim voluptas molestiae veritatis quasi commodi optio inventore quas eveniet corporis?</p>
                </div>
            </div>
        </div>
        
    </div>

    <div id="third_div">

        <div id="skills">
            <!-- <h1>Skills</h1> -->
            <div class="skills-container" id="skill-html">
                <img id="html-pic" src="assets/img/html.png" alt="html picture" width="300" height="300">
            </div>

            <div class="skills-container" id="skill-css">
                <img id="css-pic" src="assets/img/css.png" alt="html picture" height="300">
            </div>

            <div class="skills-container" id="skill-javascript">
                <img id="javascript-pic" src="assets/img/javass.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-php">
                <img id="javascript-pic" src="assets/img/php.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-java">
            <img id="javascript-pic" src="assets/img/java.png" alt="html picture" height="300">
            </div>
        </div>

        <div id="skills-second">
            <div class="skills-container" id="skill-sql">
                <img id="html-pic" src="assets/img/mysql.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-jquery">
                <img src="assets/img/jqueryt.png" alt="html picture" height="300">
            </div>

            <div class="skills-container" id="skill-android">
                <img src="assets/img/android.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-git">
                <img src="assets/img/git.png" alt="html picture" width="300">
            </div>

            <div class="skills-container" id="skill-github">
            <img src="assets/img/githubo.png" alt="html picture" width="300">
            </div>
        </div>
    </div>

    <div id="fourth_div">

        <!-- <div class="index_title">
            <h1>Projects</h1>
        </div> -->
        
        <div id="card-project">
            <div class="card-text">
                <i class="fas fa-globe"></i>
                <h1>Atelier à façon</h1>
                <p>E-boutique d'une auto-entreprise de couture sur mesure.</p>
                <button>Lien GitHub</button>
            </div>
        </div>

        <div id="card-project">
            <div class="card-text">
                <i class="fas fa-globe"></i>
                <h1>Portfolio</h1>
                <p>Projet de portfolio personnel sur lequel vous vous trouvez actuellement.</p>
                <button>Lien GitHub</button>
            </div>
        </div>

        <div id="card-project">
            <div class="card-text">
                <i class="fas fa-desktop"></i>
                <h1>Projet MVC</h1>
                <p>Projet Java J2E d'une application d'entreprise, en architecture MVC</p>
                <button>Lien GitHub</button>
            </div>
        </div>

        <div id="card-project">
            <div class="card-text">
                <i class="fas fa-mobile-alt"></i>
                <h1>App Android Calculatrice</h1>
                <p>Application Android de calculatrice réalisée avec AndroidStudio et Java</p>
                <button>Lien GitHub</button>
            </div>
        </div>

    </div>

</main>

    <?php include 'footer.php';?>

</body>

<script src="assets/js/menu.js"></script>
</html>