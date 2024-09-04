<?php require "php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="We have a wide collection of electronics, phones, books, and games">
   <meta name="keywords" content="phones, books, games, electronics">
   <link rel="stylesheet" href="css/style.css">
   <title>Our Store</title>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body id="index">
   <?php include "includes/nav.php" ?>
   <?php include "includes/header.php" ?> 
 
   <main>
   <div class="left"> <!-- Displaying the categories -->
      <div class="section-title">Product Categories</div>
      <?php $categories = getCategories() ?>
      <?php
         foreach ($categories as $category) {
            ?>
               <a href="category.php?category=<?php echo $category['category'] ?>"><?php echo ucfirst($category['category']) ?></a>
            <?php
         }
      ?>
   </div>
   <div class="right"> <!-- Displaying the products -->
   <div class="section-title">Home page</div>
   <?php $products = getHomePageProducts(4) ?>
   <div class="product">
      <?php
         foreach ($products as $product) {
            ?>
               <div class="product-left">
                  <img src="<?php echo "{$product['image']}" ?>" alt="">
               </div>
               <div class="product-right">
                  <p class="title">
                     <a href="product.php?title=<?php echo urlencode($product['title']) ?>">
                        <?php echo $product['title'] ?>
                     </a>
                  </p>
                  <p class="description"><?php echo $product['description'] ?></p>
                  <p class="price"><?php echo $product['price'] ; ?>€</p>
               </div>
            <?php
         }
      ?>
   </div>
</div>
</main>
 
   <?php include "includes/footer.php" ?>
   <script src="javascript/script.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
    AOS.init();
</script>
</body>
</html>	