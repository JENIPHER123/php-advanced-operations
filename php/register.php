<?php

/* db connection */
include_once 'conection.php';
$_SESSION['success'] = '';
$first_name = '';
$last_name = '';
$email = '';
$pass = '';


/* variable declaration */
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    /* logging in */
    $login = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$pass')";
    
    $query = mysqli_query($conn, $login);
    
    
    if($query){
        
        $_SESSION['success']='registration successful';
       
    }
    else{
        echo "error";
    }
}

?>