<?php
if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    //Readfile customers.json

    //check if usermane e passoword corrispondo

    if ($username === "test" && $password === "test") {
        $isLoggedIn = true;
        $_SESSION["userId"] = "1"; //mettere nuovo
        $_SESSION["userInfo"] = "Mario Rossi"; //mettere nuovo
    }

    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }

   header("Location: ./index.php");
}
