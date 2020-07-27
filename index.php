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
                <source src="assets/vid/background-video.mp4" type="video/mp4">
            </video>

            <div id="video-title">
                <h1>Hello World</h1>
            </div>
        </div>
        
        

    </div>

    <div id="second_div">

        <div id="resume">
            <h1>Maxime Regnault</h1>
            <h1>Web Developer / Java Developer<h1>
            <div id="resume-bio">
                <img id="profil-pic" src="assets/img/photo-max.jpg" alt="Photo de profil" width="300" height="300">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias cupiditate natus nostrum fugiat consequatur tempore rerum illum aliquam autem perferendis fuga, voluptas voluptatum voluptatem! Officia odio perspiciatis modi at!</p>
            </div>
        </div>
        
    </div>

    <div id="third_div">

        <div class="index_title">
            <h1>Guten Tag</h1>
            <p>Schnell</p>
        </div>
        
    </div>

    <div id="fourth_div">

        <div class="index_title">
            <h1>Buenos Dias</h1>
            <p>Mi colasom</p>
        </div>
        
    </div>

</main>

<?php include 'footer.php';?>

</body>

<script src="assets/js/menu.js"></script>
</html>