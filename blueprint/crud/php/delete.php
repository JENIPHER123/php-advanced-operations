<?php

/* linking to db */
include_once '../../php/conection.php';

 /* variable declaration */
 $id = $_POST['id'];

  /* deleting item from db */
  $update = "DELETE FROM crud_projects WHERE  id = '$id'";
  $query = mysqli_query($conn, $update);

  if($query){
     
    header("Location: ../sql-crud.php");

}
else{
    echo "update failed";

}
?>