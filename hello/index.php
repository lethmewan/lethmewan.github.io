<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Energizer - Tasty & Healthy Snaks</title>

    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Energizer</span>
                    <span class="profession">Tasty & Healthy</span>
                </div>
            </div>

            <ion-icon name="chevron-forward-outline" class="toggle"></ion-icon>

        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="#">
                            <ion-icon name="home-outline" class="icon"></ion-icon>
                            <span class="text nav-text">Home</span>

                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="#">
                            <ion-icon name="people-outline" class="icon"></ion-icon>
                            <span class="text nav-text">About Us</span>

                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="#">
                            <ion-icon name="fast-food-outline" class="icon"></ion-icon>
                            <span class="text nav-text">Our Products</span>

                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="#">
                            <ion-icon name="call-outline" class="icon"></ion-icon>
                            <span class="text nav-text">Contact</span>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="mode">
                    <div class="moon-sun">
                        <ion-icon name="moon-outline" class="icon moon"></ion-icon>
                        <ion-icon name="sunny-outline" class="icon sun"></ion-icon>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><ion-icon name="send-sharp"></ion-icon>contact@energizer.com</p>
                    <p><ion-icon name="call-sharp"></ion-icon>1234567890</p>
                    <div class="social-icons">
                        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href=""><ion-icon name="logo-whatsapp"></ion-icon></a>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
                    </div>
                    <a class="btn btn2" href="images/my-cv.pdf" download>Download CV</a>
                </div>
                <div class="contact-right">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>

        <!-- <footer></footer> -->
        <?php include "footer.php"; ?>
    </section>



    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>