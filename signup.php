<?php
require 'signup/config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * From users where username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
            "<script> alert('Username or Email has already been Taken.'); </script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO users values ('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo
                "<script> alert('Registration Succesfull!'); </script>";
        } else {
            echo
                "<script> alert('Password Doesnt Match.'); </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saturny Pizza</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="signup/signup.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .extra {
                padding-top: 5px;
                justify-content: start;
                margin-left: 0%;
                margin-bottom: -10px;
            }

            .extra {
                background-color: var(--bg-color);
                font-size: 14px;
                color: wheat;
                padding: 10px;
                border: none;
                border-radius: 10px;
                cursor: pointer;
            }

            .extra:hover {
                background-color: orangered;
            }
    </style>
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
    <div class="login-container">
        <form action="" method="post" autocomplete="off">
            <h2>Sign-Up</h2>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required value=""><br>

            <label for="username">Userame: </label>
            <input type="text" name="username" id="username" required value=""><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required value=""><br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required value=""><br>

            <label for="confirmpassword">Confirm Password: </label>
            <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>

            <button type="submit" name="submit">Register</button>
            <br>
            <a class="extra" href="index.html"> Login</a>
        </form>
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