<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cantor College</title>
    <link rel="stylesheet" type="text/css" href="styles/mobile.css"/>
    <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="only screen and (min-width : 720px)"/>
    <link rel="stylesheet" type="text/css" href="styles/lightslider.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lightslider.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            include("includes/header.php");
        ?>
        <div class="sliderContainer imageBanner">
            <div id="lightSlider">
                <div><img src="cantor-college-website-images\cantor-gallery-min.jpg" alt="Front Side Building"/></div>
                <div><img src="cantor-college-website-images\IMG_1437-min.jpeg" alt="Side Building 1" /></div>
                <div><img src="cantor-college-website-images\12226216184_b8d6e0073a_b-min.jpg" alt="Side Building 2" /></div>
                <div><img src="cantor-college-website-images\main_2529_image4-min.png" alt="Inside Building" /></div>
                <div><img src="cantor-college-website-images\Cantor atrium 4-min.jpg" alt="Atrium" /></div>
                <div><img src="cantor-college-website-images\Cantor4-min.jpg" alt="Grey Chairs In Hall" /></div>
            </div>
        </div>
        <main>
            <h1 class="page-title">Welcome To Cantor College</h1>
        </main>
        <?php
            include("includes/footer.php");
        ?>
    <div>
</body>
</html>