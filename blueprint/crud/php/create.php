<?php

/* linking to db */
include_once '../../php/conection.php';

 /* variable declaration */
if(isset($_POST['submit'])){
    $pname = $_POST['project_name'];
    $pid = $_POST['project_id'];
    $duration = $_POST['duration'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    
    /* logging in */
    $create = "INSERT INTO crud_projects (project_name, project_id, duration, amount,start_date) VALUES ('$pname','$pid','$duration','$amount','$date')";
    
    $query = mysqli_query($conn, $create);
    
    
    if($query){
             
        header("Location: ../sql-crud.php");
       
    }
    else{
        echo "error";
    }
}
?>