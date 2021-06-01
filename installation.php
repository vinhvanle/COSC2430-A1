<?php
    session_start();

    function alert($message){
        echo("<script>alert('$message')</script>");
    };

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        if(isset($username) && isset($password1) && isset($password2)){
            if($password1 === $password2){
                $password = password_hash($password1, PASSWORD_DEFAULT);
                $content = "Username : ".$username."; "."Password: ".$password;
                $path = ("../register.txt");
                if(!file_exists($path)){
                    $create_file = fopen($path, "w");
                    file_put_contents($path, $content);
                    header("refresh:0");
                }else{
                    $file = fopen($path, "w");
                    file_put_contents($path, $content);
                    alert("Thank You for Registering!");
                };
            }else{
                alert("Passwords Must Match!");
            };
        };
        if(empty($username) || empty($password1) || empty($password2)){
            alert("All Fields Are Required");
        };
        
    };      
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/installation.css">
    <title>Installation</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Register Account</h1>
        </div>
        <div class="form-container">
            <form action="" method="post">
                <label for="">Username:</label>
                <input type="text" name = "username"><br>
                <label for="">Password:</label>
                <input type="password1" name = "password1"><br>
                <label for="">Re-enter Password:</label>
                <input type="password2" name = "password2"><br>
                <input type="submit" name = "submit" id ="submit-btn">
            </form>    
        </div>
    </div>
</body>
</html>
