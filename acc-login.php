<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Saturny Pizza</title>
    <link rel="shortcut icon" href="images/logo.png" type="logo">
    <link rel="stylesheet" href="login-logout/login.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Saturny Pizza</h1>
        <img src="images/logo.png" alt="Saturny Pizza logo">
        <div class="announcement-container">
            <div class="announcement">
                <p>Special Offer! Get 20% off on all pizzas today.</p>
            </div>
        </div>
    </header>

    <main>
        <style>
            .extra {
                background-color: var(--bg-color);
                font-size: 14px;
                color: wheat;
                padding: 10px;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                padding-top: 5px;
                justify-content: start;
                margin-left: 0%;
            }
            .extra:hover {
                background-color: orangered;
            }
        </style>
        <form action="login.php" method="post">
            <div class="login-container">
                <h2>Login</h2>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>

                <label>User Name</label>
                <input type="text" name="uname" placeholder="User Name"><br>

                <label>Passowrd</label>
                <input type="password" name="password" placeholder="Password "><br>

                <button type="submit"> Log in </button>

                <br>
                <a class="extra" href="signup.php"> Sign-Up</a>
        </form>

        <p id="errorMessage" class="error-message"></p>
        </div>
    </main>

    <footer>
        <span>&copy; 2023 - Saturny Pizza. - All rights reserved.</span><br><br>
        <a href="https://web.facebook.com/Jameskrrrrt/" target="_blank"><i class='bx bxl-facebook-square bx-tada'
                alt="Facebook logo"></a></i>
        <a href="https://twitter.com/Jameskrrt" target="_blank"><i class='bx bxl-twitter bx-tada'
                alt="Twitter logo"></a></i>
        <a href="https://instagram.com/jameskrrt?igshid=ZDdkNTZiNTM=" target="_blank"><i
                class='bx bxl-instagram-alt bx-tada' alt="Instagram logo"></a></i>
    </footer>

</body>

</html>