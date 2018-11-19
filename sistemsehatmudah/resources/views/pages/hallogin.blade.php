<!DOCTYPE HTML>

<?php

    // Memulai session
    session_start();

    // Mendefinisikan username dan password
    $username = "admin";
    $password = "pw123";

    // Error message
    $error = "";

    // Cek apakah user sudah log in, jika sudah akan diarahkan ke page selanjutnya
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: <nama_file_homepage.php>');
    } 
        
    // Cek untuk melihat apakah username dan password telah dimasukkan
    // Jika sudah dan cocok dengan username dan password yang telah didefinisikan, log in
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: <nama_file_homepage.php>');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid <nama_file_homepage.php>";
        }
    }
?>

@extends('layouts/baseTemplate')

@section('content')
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/stylenew.css') }}">
    </head>
    <body>
        <?php echo $error; ?>
        <div class="loginbox">
            <h1>Login here</h1>

        
        <!-- form untuk login -->
        <form method="post" action="hallogin.php">


            <label for="username">Username:</label><br/>
            <input type="text" placeholder="Enter username" required name="username" id="username"><br/>
      
            <label for="password">Password:</label><br/>
            <input type="password" placeholder="Enter password"  required name="password" id="password"><br/>
      
            <input type="submit" value="Log In">
        </form>
		<p>Don't have an account? Click<a href="#<insert_register_page.php>"> here </a>to create new account</p>
    </body>
</html>
@endsection