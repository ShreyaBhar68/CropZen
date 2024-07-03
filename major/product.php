<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>
    
    <style>

.content_section {
  text-align: center;
}

.welcome_heading {
  font-size: 36px; 
  font-weight: bold;
  color: #4CAF50;
  text-transform: uppercase;
  margin-bottom: 20px; 
  text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); 
}

.para1 {
  font-size: 24px;
  font-weight: bold; 
  color: #333; 
  margin-bottom: 2px; 
  text-transform: uppercase; 
  text-align: center; 
}

.product_box {
  display: inline-block;
  width: 200px;
  height: 300px; /* Set a fixed height for all product boxes */
  margin: 10px;
  text-align: center;
  border: 1px solid #fff;
  border-radius: 5px;
  padding: 10px;
  transition: transform 0.3s ease;
  vertical-align: top; /* Align boxes to the top */
}

.product_box:hover {
  transform: translateY(-5px);
}

.image_wrapper {
  height: 150px; /* Set a fixed height for the image wrapper */
  display: flex;
  align-items: center;
  justify-content: center;
}

.image_wrapper img {
  max-width: 100%;
  max-height: 100%; /* Ensure the image fits within the wrapper */
}

.price {
    font-size: 16px; /* Decrease the font size */
    color: #333; /* Set a different color */
    font-weight: bold; /* Make the text bold */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add a subtle shadow */
    padding: 5px 10px; /* Add padding around the text */
    border-radius: 5px; /* Add rounded corners */
    display: inline-block; /* Make it inline-block to fit content */
    margin-top: 5px; /* Add some top margin */
  }
.no-decoration {
  display: inline-block;
  padding: 10px 20px;
  padding: 5px 5px;
  margin: 10px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.no-decoration:hover {
  background-color: #45a049;
}

.button_01 {
  margin-top: 20px;
  margin-bottom: 20px; /* Add bottom margin */
  text-align: center;
}

.button_01 a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.button_01 a:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
<?php 
    include "navbar.php"
    ?>
    <?php require('slide.php');?>
    <div class="content_section">
  <h2 class="welcome_heading">Welcome to CropZen</h2>
</div>

<div class="content_section">
  <h3 class="para1">Our Products</h3>
  <p>Our products are proudly made and featured by farmers from our state.</p>
  
  <div class="product_row">
    <div class="product_box">
      <h3>Smart Tractor</h3>
      <div class="image_wrapper"> 
        <img src="equipment1.jpg" alt="Smart Tractor" />
      </div>
      <p class="price">Price: ₹20,000</p>
      <a href="payment.php" class="no-decoration">PAYMENT</a>
    </div>
    <!-- Add the other 3 products in this row -->
    <div class="product_box">
      <h3>Agricultural Drone</h3>
      <div class="image_wrapper"> 
        <img src="equipment2.jpg" alt="Agricultural Drone" />
      </div>
      <p class="price">Price: ₹5,000</p>
      <a href="payment.php" class="no-decoration">PAYMENT</a>
    </div>
    <div class="product_box">
      <h3>Wheat</h3>
      <div class="image_wrapper"> 
        <img src="product1.jpg" alt="Wheat" />
      </div>
      <p class="price">Price: ₹10 per kg</p>
      <a href="payment.php" class="no-decoration">PAYMENT</a>
    </div>
    <div class="product_box">
      <h3>Corn</h3>
      <div class="image_wrapper"> 
        <img src="product2.jpeg" alt="Corn" />
      </div>
      <p class="price">Price: ₹10 per kg</p>
      <a href="payment.php" class="no-decoration">PAYMENT</a>
    </div>
  </div>

  <!-- Add another row of 4 products -->
  <div class="product_row">
  <div class="product_box">
    <h3>Darjeeling Tea</h3>
    <div class="image_wrapper"> 
      <img src="darjeeling-tea-leaves.jpg" alt="tea" />
    </div>
    <p class="price">Price: ₹418 per kg</p>
     <a href="payment.php" class="no-decoration">PAYMENT</a>
  </div>

  <!-- Add Rice here -->
  <div class="product_box">
    <h3>Rice</h3>
    <div class="image_wrapper"> 
        <img src="RICEE.jpg" alt="Rice" />
    </div>
    <p class="price">Price: ₹45 per kg</p>
     <a href="payment.php" class="no-decoration">PAYMENT</a>
  </div>

  <div class="product_box">
    <h3>Harvest Robot</h3>
    <div class="image_wrapper"> 
        <img src="harvestrobot.jpg" alt="harvestrobot" />
    </div>
    <p class="price">Price: ₹10,00,000</p>
     <a href="payment.php" class="no-decoration">PAYMENT</a>
  </div>

  <!-- Add Sprayer here -->
  <div class="product_box">
    <h3>Sprayer</h3>
    <div class="image_wrapper"> 
        <img src="sprayer1.jpg" alt="spray" />
    </div>
    <p class="price">Price: ₹2665</p>
     <a href="payment.php" class="no-decoration">PAYMENT</a>
  </div>
  </div>

  <div class="cleaner"></div>
  <div class="button_01"><a href="viewall.php">View All</a></div>
</div>

   
    <?php require('footer.php');?>
</body>
</html>