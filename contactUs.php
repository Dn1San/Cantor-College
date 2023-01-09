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
        <?php
            include("includes/header.php");
        ?>
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
        <?php
            include("includes/footer.php");
        ?>
    </div>
</body>
</html>