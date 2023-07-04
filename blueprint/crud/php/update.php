<?php

/* linking to db */
include_once '../../php/conection.php';

 /* variable declaration */
 $pname = $_POST['project_name'];
 $pid = $_POST['project_id'];
 $duration = $_POST['duration'];
 $amount = $_POST['amount'];
 $date = $_POST['date'];

  /* updating db */
  $update = "UPDATE crud_projects SET project_name = '$pname', duration = '$duration', amount = '$amount',start_date = '$date' WHERE  project_id = '$pid'";
  $query = mysqli_query($conn, $update);
 
  if($query){
     
      header("Location: ../sql-crud.php");
  
  }
  else{
      echo "update failed";

  }
?>