<?php
 include_once 'db_connect.php';?>
 <?php

 if(isset($_GET['id']))
 {
   $delete_id = $_GET['id'];
   
   $sql_delete = mysqli_query($conn,"DELETE FROM message WHERE id = '$delete_id'");
   if($sql_delete){
     header('location: read_msg.php');
   }
   else
   {
       echo mysqli_error($conn);
   }
 }

?>