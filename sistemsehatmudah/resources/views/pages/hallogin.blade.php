<!DOCTYPE HTML>
@extends('layouts/baseTamplate')
@section('content')

<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/stylenew.css') }}">
    </head>
    <body>
        <div class="loginbox">
            <h1>Login here</h1>

        <form method="post" action="/sistemlogin">
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