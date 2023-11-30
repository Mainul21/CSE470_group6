<?php
session_start();
// database connection
require_once("dbconnect.php");

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user_info WHERE username ='$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $result = mysqli_fetch_array($query);

        if ($result && mysqli_num_rows($query) == 1) {
            $_SESSION['username'] = $username;
            header("Location: UserProfile.php");
        } else {
            echo "Wrong username or password. Please Try Again";
            header("Location: LoginPage.php");
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle the case where the username and/or password were not provided in the POST request.
    // You should display an error message or redirect the user back to the login page.
    echo "Please enter both username and password.";
}
?>
