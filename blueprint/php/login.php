<?php

session_start(); 
/* db connection */
include_once 'conection.php';


if (isset($_POST['email']) && isset($_POST['password'])) {
    
    /* variable declaration */
    $email = $_POST['email'];
    $pass = $_POST['password'];

    /* logging in */
    $login = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $query = mysqli_query($conn, $login);
    $fetch = mysqli_fetch_assoc($query);

    if(isset($fetch['email'])){
        session_start();
        $_SESSION['email']=$$fetch['email'];
        $_SESSION['password']=$$fetch['password'];
        $_SESSION['first_name']=$$fetch['first_name'];
        $_SESSION['last_name']=$$fetch['last_name'];

        header("Location: ../main-landing/main-landing.php");
    
    }
    else{
        header("Location: ../index.php");

    }
}

?>