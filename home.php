<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Saturny Pizza</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
        <script src="countdown.js" async></script>
    </head>

    <body>
        <style>
            nav a {
                font-family: 'Mochiy Pop One', sans-serif;
            }
            .row {    
                width: 100%;
                display: flex;
                justify-content: start;
                .left{
                    overflow: hidden;
                    img{
                        display: flex;
                        height: 80px;
	                    width: 120px;
	                    border-radius: 50%;
                        object-fit: cover;
                    }
                }
                .cont{
                    display: grid;
                    color: orangered;
                    margin-top: 15px;
                    font-size: 22px;
                    h2{
                        color: orangered;
                    }
                }
                .right{
                    display: flex;
                    margin-top: 27px;
                    margin-left: 50%;
                    .nm{
                        color: white;
                    }
                    aa{
                        font-size: 14px;
                        color: wheat;
                    }
                }
            }
        </style>

        <!-- NavBar -->
        <header id="top">
            <!-- NC/img(logo) -->
            <div class="row">
                <div class="left">
                       <img src="images/logo.png" alt="Saturny Pizza logo" link="home.php">
                </div>

                <!-- SP/ab -->
                <div class="cont">
                        <h2 href="home.php">Saturny Pizza</h2>
                </div>

                <!-- hello/nm -->
                <div class="right">
                    <hh class="nm">Hello,
                        <?php echo $_SESSION['name']; ?>
                        <a href="logout.php">
                            <aa> Logout ?</aa>
                        </a>
                    </hh>
                </div>
            </div>

            <nav>
                <a href="home.php" class="active">Home</a>
                <a href="menu.html">Menu</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact</a>
            </nav>
        </header>

        
        <div class="content-wrapper">
            <section>
                <h1>Welcome to Saturny Pizza, the home of the best pizza in town!</h1>
                <p>Our restaurant is dedicated to providing you and your loved ones with the most delicious pizza
                    experience. We offer a wide range of pizzas made with the freshest ingredients and prepared by our
                    expert chefs.</p>
                <p>Our menu features a variety of flavors and toppings to satisfy everyone's taste buds. Whether you are a
                    meat lover or a vegetarian, we have something for everyone. Our restaurant is perfect for a night out
                    with friends, a family dinner, or even a quick bite during your lunch break.</p>
                <p>At Saturny Pizza, we take pride in providing our customers with the best quality pizza at an affordable
                    price. We believe that everyone should be able to enjoy great-tasting pizza without breaking the bank.
                </p>
                <p>So come on in and join us at Saturny Pizza! We can't wait to serve you and make your dining experience a
                    memorable one.</p>

                <article>
                    <h2>Best Sellers!</h2>
                    <div class="best-seller-wrapper">
                        <figure>
                            <img src="images/Marrakech.jpeg" alt="Marrakech">
                            <figcaption>Marrakech</figcaption>
                        </figure>
                        <figure>
                            <img src="images/Withsalmon.jpeg" alt="With salmon and spinach">
                            <figcaption>With salmon and spinach</figcaption>
                        </figure>
                        <figure>
                            <img src="images/PremiumPizza.jpeg" alt="Premium cheese">
                            <figcaption>Premium cheese</figcaption>
                        </figure>
                    </div>
                    <div class="order-now">
                        <a href="menu.html">
                            <button>Order Now!</button>
                        </a>
                    </div>
                </article>
            </section>

            <aside class="promo-section">
                <div class="countdown-container">
                    <h2>Special Promotion Ends In: </h2>
                    <div id="countdown"></div>
                </div>
                <h2>Promos and Discounts</h2>
                <div class="promo-box">
                    <h3>Monday Madness</h3>
                    <p>Get any 2 pizzas for only ₱400!</p>
                </div>
                <div class="promo-box">
                    <h3>Family Feast</h3>
                    <p>Buy any 14-inch pizza and get a free family-sized garlic bread!</p>
                </div>
                <div class="promo-box">
                    <h3>Student Discount</h3>
                    <p>Show your valid student ID and get 10% off your entire order!</p>
                </div>
                <div class="promo-box">
                    <h3>Weekend Special</h3>
                    <p>Get a free dessert for every order of 2 large pizzas on Saturdays and Sundays!</p>
                </div>
            </aside>
        </div>

        <footer>
            <span>&copy; 2023 - Saturny Pizza. - All rights reserved.</span><br><br>
            <a href="https://web.facebook.com/Jameskrrrrt/" target="_blank"><i class='bx bxl-facebook-square bx-tada'
                    alt="Facebook logo"></a></i>
            <a href="https://twitter.com/Jameskrrt" target="_blank"><i class='bx bxl-twitter bx-tada'
                    alt="Twitter logo"></a></i>
            <a href="https://instagram.com/jameskrrt?igshid=ZDdkNTZiNTM=" target="_blank"><i
                    class='bx bxl-instagram-alt bx-tada' alt="Instagram logo"></a></i>
        </footer>
        <script src="countdown.js"></script>
    </body>

    </html>

    <?php
} else {
    header("Location: acc-login.php");
    exit();
}
?>