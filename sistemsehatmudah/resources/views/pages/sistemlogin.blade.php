<?php
    session_start();

    $username = "admin";
    $password = "pw123";

    $error = "";

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        return view('pages/home');
    } 
        
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            return view('pages/home');
        } 
        else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!";
            return view('pages/hallogin');
        }
    }
?>