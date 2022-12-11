<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

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
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <font color="WHITE">
      <p>This is an admin page for Mini Project Team</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="https://s3.console.aws.amazon.com/s3/buckets/my2189?region=ap-south-1&prefix=AWS-chess-ai-master/&showversions=false" class="btn">AWS</a>
      <a href="logout.php" class="btn">Database</a>
      <a href="https://my2189.s3.ap-south-1.amazonaws.com/AWS-chess-ai-master/index.html" class="btn">Play Chess</a>
   </div>

</div>

</body>
</html>