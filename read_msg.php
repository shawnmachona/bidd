<?php
 include_once 'db_connect.php';?>
 <?php

 if(isset($_GET['id']))
 {
   $main_id = $_GET['id'];
   $sql_update = mysqli_query($conn,"UPDATE message SET status = 1 WHERE id = '$main_id'");
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/806a685f90.js" crossorigin="anonymous"></script>
    <link rel= "stylesheet" type= "text/css" href= "css/mystyle.css">
    <link rel= "stylesheet" type= "text/css" href= "css/style.css">
   
  </head>
    <?php
    session_start();
    include('admin/db_connect.php');
  
    ob_start();
        $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
         foreach ($query as $key => $value) {
         if(!is_numeric($key))
            $_SESSION['system'][$key] = $value;
        }
    ob_end_flush();
    include('header.php');

	  ?>

    <style>
      #table1{
        margin-top: 5rem!important;
      }
    </style>
    <body>
    
    <div class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home"><i class="fas fa-home"></i> Home</a></div>
    <div class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fas fa-money-bill"></i> Proceed to Make Payments</a></div>
    

     <div class="container" id="table1">
         <div class = "row">
             <table class = "table">
        <thead class = "thead-dark">
            <tr>
                <th scope="col">S.no</th> 
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
            <tr>
         </thead>

          <tbody>

          <?php
          $sr_no =1; 
           $sql_get = mysqli_query($conn,"SELECT * FROM message WHERE status =1");
          while($main_result = mysqli_fetch_assoc($sql_get)):?>
            <tr>
                <th scope="row"><?php echo $sr_no++; ?></th>  
                <td><?php echo $main_result['name'];?></td> 
                <td><?php echo $main_result['message'];?></td>
                <td><?php echo $main_result['cr_date'];?></td>
                <td><a href="delete.php?id=<?php echo $main_result['id']?>"class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
            </tr>           
            <?php endwhile ?>
           </tbody>    
    </table>
    </div>
    </div>

     </div>



                

 