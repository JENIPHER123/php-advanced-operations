<?php
session_start();

/* variable declaration = empty */
$_SESSION['fname']='';
$_SESSION['lname']='';
$_SESSION['email']='';
$_SESSION['gender']='';
$_SESSION['code']='';
$_SESSION['confirm_code']='';
$_SESSION['access_code']='';
$_SESSION['fname']='';
$_SESSION['msg']='';




/* variable declaration  */
if($_POST['first_step']){

    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['lname']=$_POST['lname'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['gender']=$_POST['gender'];
   
}
if($_POST['second_step']){  
    $_SESSION['code']=$_POST['code'];
    $_SESSION['confirm_code']=$_POST['confirm_code'];
   
}
if($_POST['third_step']){ 
    $_SESSION['access_code']=$_POST['access_code'];
    $_SESSION['access_code']=$_POST['access_code'];
    $_SESSION['msg']=$_POST['msg'];
    
}
if($_POST['fourth_step']){
    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['lname']=$_POST['lname'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['code']=$_POST['code'];
    $_SESSION['confirm_code']=$_POST['confirm_code'];
    $_SESSION['access_code_confirm']=$_POST['access_code_confirm'];
    $_SESSION['c']=$_POST['access_code'];
    $_SESSION['msg']=$_POST['msg'];
    
    
}

?>