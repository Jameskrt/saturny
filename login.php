<?php
session_start();
include 'login-logout/db-conn.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: acc-login.php?error=User Name is required ");
        exit();
    } else if (empty($pass)) {
        header("Location: acc-login.php?error=Password is required ");
        exit();
    } else {

        // Check if the entered credentials are "admin/admin"
        if ($uname === "admin" && $pass === "admin") {
            // Redirect to the admin panel
            $_SESSION['username'] = $uname;
            $_SESSION['name'] = "Admin";
            header("Location: admin-panel.html");
            exit();
        }

        // Perform the database check for other users
        $sql = "SELECT * FROM users WHERE username = '$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: home.php");   
                exit();

            } else {
                header("Location: acc-login.php?error=Incorrect Username or Password ");
                exit();
            }
        } else {
            header("Location: acc-login.php?error=In-correct Username or Password ");
            exit();
        }
    }

} else {
    header("Location: acc-login.php");
    exit;
}
?>