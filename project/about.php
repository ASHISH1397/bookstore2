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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Our Bookstore, your haven for literary exploration and discovery! Dive into our digital shelves where you'll find an extensive collection of books spanning various genres, from timeless classics to contemporary bestsellers.
         Browse through our curated selections, explore themed book lists, and uncover hidden gems recommended by our avid team of bibliophiles. With user-friendly navigation and intuitive search functionalities, finding your next literary adventure is just a click away.
         Join us in celebrating the written word and embark on a journey of discovery and imagination with Our Bookstore. Happy reading!</p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I stumbled upon Our Bookstore while searching for a specific title, and I'm glad I did. Not only did they have the book I was looking for, but their checkout process was smooth and hassle-free. The ability to create a wishlist and track my orders is a nice touch. I'll definitely be coming back for more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>As a voracious reader, I'm always on the lookout for new bookstores to explore online. Our Bookstore exceeded my expectations! The website's layout is clean and easy to navigate, and I love how they categorize books by genre and themes. It's like having a personal librarian at your fingertips!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Samantha</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I'm a skeptic when it comes to online shopping, especially for books. But after giving Our Bookstore a try, I'm pleasantly surprised. The website's interface is intuitive, and the book descriptions are detailed and informative. It feels like I'm browsing shelves in a physical store, minus the crowds and long lines. Two thumbs up!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>As a busy mom, I don't have much time to browse for books in-store. Our Bookstore's website is a lifesaver! I appreciate the curated book lists and recommendations—they've introduced me to some fantastic reads I wouldn't have discovered otherwise. Their quick delivery means I can indulge in my reading passion.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I'm not tech-savvy by any means, so I was hesitant to try online book shopping. But Our Bookstore's website is so user-friendly that even I can navigate it with ease! The search function is robust, and I appreciate the option to filter results by price and format. It's like having a personal bookstore concierge at my service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>James</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>As an aspiring writer, I'm always seeking inspiration from other authors. Our Bookstore's blog section is a goldmine of writing tips, author interviews, and literary insights. It's become my go-to resource whenever I hit a creative block. Kudos to the team for fostering a community of aspiring writers like myself!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rachael</h3>
      </div>

   </div>

</section>

<!-- <section class="authors">

   <h1 class="title">authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section> -->


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>