<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<style>
            body {
                background-image: url('https://my2189.s3.ap-south-1.amazonaws.com/AWS-chess-ai-master/1080-1920.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <font color="WHITE">
      <p>This is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="https://my2189.s3.ap-south-1.amazonaws.com/AWS-chess-ai-master/index.html" class="btn">Play Chess</a>
   </div>

</div>

</body>
</html>