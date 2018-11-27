<!DOCTYPE HTML>
@extends('layouts/baseTamplate')
@section('content')

<?php
    session_start();

    $username = "admin"; //tolong ganti acuan session untuk login / arahkan pencocokan ke database
    $password = "pw123"; //tolong ganti acuan session untuk login / arahkan pencocokan ke database

    $error = "";

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: /'); //tolong ubah direktori page setelah login berhasil
    } 
        
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: /'); //tolong ubah direktori page setelah login berhasil
        } 
        else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!";
        }
    }
?>

<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/stylenew.css') }}">
    </head>
    <body>
        <div class="loginbox">
            <h1>Login here</h1>

        <form method="post" action="/login">
            <label for="username">Username:</label><br/>
            <input type="textlogin" placeholder="Enter username" required name="username" id="username"><br/>
      
            <label for="password">Password:</label><br/>
            <input type="passwordlogin" placeholder="Enter password"  required name="password" id="password"><br/>
      
            <input type="submit" value="Log In">
        </form>
		<p>Don't have an account? Click<a href="/register"> here </a>to create new account</p>
    </body>
</html>
@endsection