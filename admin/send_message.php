<?php


 include_once 'db_connect.php';
 

 if(isset($_POST['send']))
 {
  $name = $_POST['name'];
  $msg = $_POST['msg'];
  $date = date('y-m-d h:i:s');

  $sql_insert = mysqli_query($conn,"INSERT INTO message(name,message,cr_date) VALUES ('$name','$msg','$date')");
if($sql_insert)
{  
 echo "<script>alert('message sent!!');</script>"; 
}
else
{
  echo mysqli_error($conn);
  exit;
}
}

 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/806a685f90.js" crossorigin="anonymous"></script>
    <link rel= "stylesheet" type= "text/css" href= "css/styles2.css">
    <link rel= "stylesheet" type= "text/css" href= "css/style.css">
   
  

    <title>Welcome to MoBid!</title>
  </head>
  <body>

  <a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>


    <div class= "container" id ="center">
        <div class ="row">
            <div class = "col-sm-4"></div>
            <div class = "col-sm-4">
              
                <form method="post">
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">name</label>
                       <input type="text" class="form-control" name ="name" id="exampleInputEmail1"  placeholder ="Type your name">
    
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                       <label for="exampleFormControlTextarea1" class="form-label">Enter message</label>
                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                   </div>
                        </div>
                     <button type="submit" name="send" class="btn btn-primary">Submit</button>
               </form>
                
            </div>
            <div class = "col-sm-4"></div>


</div>
</div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>