<?php
require_once("dbconnect.php");

if ((isset($_POST["username"]) && isset($_POST["name"])) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phone"]) && isset($_POST["address"])){
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO user_info VALUES('$username','$name','$email','$password','$phone','$address')";
    $result = mysqli_query($conn,$sql);


    if (mysqli_affected_rows($conn)){
        header("Location: LoginPage.php");
    }
    else{
        header("Location: SignupPage.php");
    }


}
?>
