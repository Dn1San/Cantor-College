<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Cantor College</title>
    <link rel="stylesheet" type="text/css" href="styles/mobile.css"/>
    <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="only screen and (min-width : 720px)"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js\main.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo">
                <img src="cantor-college-website-images\logo-min.png" alt="Logo">
                <div class="burger">
                    <img src="cantor-college-website-images\whiteMenu.svg" alt="Menu">
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="findUs.html">How To Find Us</a></li>
                    <li><a href="computingCourses.html">Computing Courses</a></li>
                    <li><a href="designCourses.html">Design Courses</a></li>
                    <li><a href="facilities.html">Facilitites</a></li>
                    <li><a href="learningResources.html">Learning Rescourses</a></li>
                    <li><a href="informationForStaff.html">Information For Staff</a></li>
                    <li><a href="informationForStudents.html">Information For Students</a></li>
                    <li><a href="workingWithBusiness.html">Working With Business</a></li>
                    <li><a href="contactUs.html">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="page-title">Contact Us</h1>
            <form action="thankYou.html">
                <div>
                    <label for="yourName">Name:</label>
                    <input type="text" name="yourName" id="yourName" placeholder="Please Add Your Name">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div>
                    <label>Telephone:</label>
                    <input type="tel" name="tel" placeholder="Telephone Number">
                </div>
                <div>
                    <label for="message" >Message:</label>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </div>
                <div class="submitContainer">
                    <input type="submit" value="Send">
                </div>
            </form>
        </main>
        <footer>
            <p>&copy; Copyright 2022 Sheffield Hallam University</p>
        </footer>
    </div>
</body>
</html>