<?php
/* db connection */
include_once 'conection.php';

/* variable declaration */
$email = $_POST['email'];
$pass = $_POST['password'];

/* logging in */
$login = "SELECT * FROM users WHERE email ='$email' AND password ='$pass'";

$query = mysqli_query($conn, $login);

$fetch = mysqli_fetch_assoc($query);

if($query){
    echo "login successful";
  
}
else{
    echo "error";

}
?>