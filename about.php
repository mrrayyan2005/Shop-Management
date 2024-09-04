<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="We have a wide collection of electronics, phones, books, and games">
   <meta name="keywords" content="phones, books, games, electronics">
   <link rel="stylesheet" href="css/style.css">
   <title>Our Store</title>
   <style>
body {
   background-color: #F8EDE3;
   font-family: sans-serif;
   color: #555;
   margin: 0;
   padding: 0;
}

.container{
   padding: 20px;
   max-width: 1200px;
   margin: 0 auto;
}

.about-section {
   background-color: #DFD3C3;
   border-radius: 8px;
   padding: 20px;
   margin-bottom: 20px;
}

.about-section h2 {
   font-size: 28px;
   color: #982B1C;
   margin-bottom: 15px;
}

.about-section p {
   font-size: 18px;
   line-height: 1.6;
   color: #555;
}
.info{
   display: flex;
   gap: 10px;
   justify-content: center;
}

/* Team Section Styles */
.team {
   display: flex;
   flex-wrap: wrap;
   gap: 20px;
   justify-content: space-around; /* Centering team members and adding space between */
}

.team-member {
   background-color: #fff;
   border: 1px solid #d4d4d4;
   border-radius: 8px;
   padding: 15px;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   text-align: center;
   flex: 1 1 calc(25% - 20px); /* 4 columns with spacing */
   max-width: calc(25% - 20px);
   margin-bottom: 20px;
}

.team-member img {
   width: 100px;
   height: 100px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 10px;
}

.team-member h3 {
   font-size: 18px;
   color: #982B1C;
   margin: 10px 0;
}

.team-member p {
   font-size: 14px;
   color: #666;
}

footer {
   background-color: #DFD3C3;
   color: #555;
   padding: 20px 0;
   text-align: center;
   border-top: 1px solid #C5705D;
}

footer p {
   margin: 0;
   font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
   .team-member {
       flex: 1 1 calc(33.333% - 20px); /* 3 columns for tablets */
       max-width: calc(33.333% - 20px);
   }
}

@media (max-width: 768px) {
   .team-member {
       flex: 1 1 calc(50% - 20px); /* 2 columns for mobile */
       max-width: calc(50% - 20px);
   }
}

@media (max-width: 480px) {
   .team-member {
       flex: 1 1 100%; /* Single column for very small devices */
       max-width: 100%;
   }
}
   </style>
</head>
<body id="about">
   <?php include "includes/nav.php" ?>
   <?php include "includes/header.php" ?>
   <div class="container">
      <div class="info">
      <div class="about-section">
         <h2>About Us</h2>
         <p>Welcome to Our Store! We are dedicated to providing a wide collection of electronics, phones, books, and games at affordable prices. Our mission is to deliver high-quality products and exceptional customer service to ensure that your shopping experience is both enjoyable and fulfilling.</p>
      </div>

      <div class="about-section">
         <h2>Our Mission</h2>
         <p>At Our Store, our mission is to be the go-to destination for all your electronics, phone, book, and game needs. We strive to offer the best products at competitive prices while delivering excellent customer service. Our commitment to quality and customer satisfaction drives everything we do.</p>
      </div>
      </div>

      <div class="about-section">
         <h2>Meet the Team</h2>
         <div class="team">
            <div class="team-member">
               <img src="products/team1.jpg" alt="Mohd Rayyan">
               <h3>Mohd Rayyan</h3>
               <p>Founder & CEO</p>
            </div>
            <div class="team-member">
               <img src="products/team1.jpg" alt="Ashish Kumar Singh">
               <h3>Ashish Kumar Singh</h3>
               <p>Marketing Manager</p>
            </div>
            <div class="team-member">
               <img src="products/team1.jpg" alt="Muzahidin">
               <h3>Muzahidin</h3>
               <p>Customer Support Lead</p>
            </div>
            <div class="team-member">
               <img src="products/team1.jpg" alt="Mayank Rajput">
               <h3>Mayank Rajput</h3>
               <p>Customer Support Lead</p>
            </div>
         </div>
      </div>
   </div>
   <?php include "includes/footer.php" ?>
   <script src="javascript/script.js"></script>
</body>
</html>
