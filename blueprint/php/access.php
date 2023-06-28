<?php

/* variable declaration */
$access_code = $_POST['access_code'];

if($access_code == '4488'){
    header('Location: ../login.php');
}else{
    header('Location: ../index.php');
}
?>