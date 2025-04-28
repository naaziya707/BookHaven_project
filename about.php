<?php

include 'config.php';

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
   <title>ABOUT</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutus.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>"Welcome to our online book paradise, where the love for literature meets unparalleled service! At BookHaven, we pride ourselves on being more than just a store; we're your literary companions on a journey of discovery. We curate a diverse selection to cater to every taste and preference. What sets us apart is our commitment to fostering a vibrant reading community. Our user-friendly website offers personalized recommendations, exclusive author interviews, and a lively book club where readers can connect and share their thoughts. Enjoy hassle-free shopping with secure transactions, prompt delivery, and a seamless browsing experience. At BookHaven, we believe in the magic of books, and we invite you to explore, indulge, and embark on countless literary adventures with us."</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rpic1.avif" alt="">
         <p>"BookHaven exceeded my expectations with their vast selection and quick delivery. A book lover's haven indeed! I love this store a lot and I will keep coming back to it"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Naina Patel </h3>
      </div>

      <div class="box">
         <img src="images/rpic2.avif" alt="">
         <p>"Navigating BookHaven's user-friendly site made finding my favorite titles a breeze. Outstanding service and an extensive collection keep me coming back!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Riya Desai</h3>
      </div>

      <div class="box">
         <img src="images/rpic3.avif" alt="">
         <p>"Impressed by BookHaven's personalized recommendations, they truly understand my reading preferences. Fantastic customer service and a delightful online shopping experience."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aryan Mehta</h3>
      </div>

      <div class="box">
         <img src="images/rpic4.avif" alt="">
         <p>"BookHaven's commitment to community is evident through their engaging book club. It's not just a store; it's a reading sanctuary with excellent service!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Jessy Katopolis</h3>
      </div>

      <div class="box">
         <img src="images/rpic5.avif" alt="">
         <p>"As a loyal customer, BookHaven continues to amaze with their prompt deliveries and unbeatable prices. My go-to for all things literary!I buy all my favourites with this store"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kavya Mehra</h3>
      </div>

      <div class="box">
         <img src="images/rpic6.avif" alt="">
         <p>"BookHaven's attention to detail sets them apart – from the curated selection to their exceptional customer service, it's a haven for every book enthusiast!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aarav Sharma</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/a1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amanda Jayatissa</h3>
      </div>

      <div class="box">
         <img src="images/roy.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Arundhati Roy</h3>
      </div>

      <div class="box">
         <img src="images/a2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rupi Kaur</h3>
      </div>

      <div class="box">
         <img src="images/a3.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Michelle Obama</h3>
      </div>

      <div class="box">
         <img src="images/bha.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/a4.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/mur.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sudha Murthy</h3>
      </div>

      <div class="box">
         <img src="images/A5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sally Rooney</h3>
      </div>

      <div class="box">
         <img src="images/A6-.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jordan Harper</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>