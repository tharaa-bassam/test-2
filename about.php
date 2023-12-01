<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- Font Awesome CDN link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="abut">

   <div class="row">

      <div class="abut-box">
         <img src="images/about-2.jpg" alt="" class="abut-img">
         <div class="abut-content">
            <h3>Why Choose Us?</h3>
            <p>"Your Style, Your Choice: Count on us to cater to your unique style and fashion preferences with our diverse range of products."</p>
         </div>
      </div>

      <div class="abut-box">
         <img src="images/about-3.jpg" alt="" class="abut-img">
         <div class="abut-content">
            <h3>What We Provide?</h3>
            <p>"Wide Range of Trendy Clothing: Explore our collection for a diverse selection of the latest fashion trends."</p>
         </div>
      </div>

   </div>

</section>
</body>
</html>










<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>