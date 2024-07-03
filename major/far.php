<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART FARMING</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .heading{
            text-align: center;
            padding: 2.5rem 0;
        }
        .heading span{
            font-size: 1.8rem;
            background: rgba(255,155,0,.2);
            color:#4CAF50;
            border-radius: .5rem;
            padding:.2rem 1rem;
        }
        .heading span.space{
            background: none;
        }
        .about .content p{
            font-size: 1.5rem;
            color: black;
            padding:.5rem 0;
            display: inline-block;
            text-align: center;
        }
        .about .content img{
        height: 300px;
        width: 1000px;
        padding-left: 20rem;
        }
        .about .content .btn{
            padding: 7px 9px;
            margin-left: 10px;
            background-color: transparent;
            color: black;
            border: 1px solid white;
            cursor: pointer;
            margin: 0 .5rem;
        }
        .about .content .btn:hover {
        background-color: white;
        color: #4CAF50;
        }
        .footer{
        background: #32612D;
        }
        .footer .box-container{
        display: flex;
        flex-wrap: wrap;
        gap:1.5rem;
        }
        .footer .box-container .box{
        padding: 1rem 0;
        flex: 1 1 25rem;
        }
        .footer .box-container .box h3{
        font-size: 1.5rem;
        color: #fff;
        margin-left: 9rem;
        text-decoration: underline;
        }

        .footer .box-container .box a{
        display: block;
        font-size: 1.5rem;
        color: #eee;
        margin-left: 9rem;
        text-decoration: none;
        }
        .footer .box-container .box a:hover{
        text-decoration: underline;
        color:black;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 20px;
            /* Set the height of the grid container to match its width */
            width: min(100%, 600px); /* Limiting the width to 600px for better readability */
            max-width: 100%; /* Ensures the container doesn't overflow its parent */
            max-height: 100%; /* Ensures the container doesn't overflow its parent */
            margin: auto;
        }

        .section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }

        .section h2 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .section p {
            margin-bottom: 15px;
            text-align:center;
        }
        .sec-1 {
            background-color: #ECFFDC; /* Light blue-green */
        }
        .sec-2 {
            background-color: #AFE1AF; /* Light blue-green */
        }
        .sec-3 {
            background-color: #90EE90; /* Light blue-green */
        }
        .sec-4 {
            background-color: #dbe7e4; /* Light blue-green */
        }
        
    </style>
</head>
<body>
<?php require('navbar.php');?>
<?php require('slide.php');?>
    <section class="about" id="about">
        <h1 class="heading">
            <span>W</span>
            <span>H</span>
            <span>O</span>
            <span class="space"></span>
            <span>W</span>
            <span>E</span>
            <span class="space"></span>
            <span>A</span>
            <span>R</span>
            <span>E</span>
        </h1>
        <div class="content">
            <img src="rice.jpg">
            <p>Welcome to <b>CropZen</b>, where innovation meets agriculture.<br> We are passionate about revolutionizing farming practices through <b>cutting-edge technology</b>. <br>Our mission is to empower farmers with <b>smart solutions</b> that enhance productivity, sustainability, and profitability.
            <a href="about.php" class="btn">MORE..</a></p>
            
        </div>
    </section>
    <section class="service" id="service">
        <h1 class="heading">
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>E</span>
            <span>S</span>
        </h1>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="grid-container">
                            <div class="section sec-1">
                                <h2>Recommendations</h2>
                                <p>Crop Recommendation Systems (CRS) are computer-based tools that help farmers make informed decisions about which crops to plant based on factors such as soil type, weather patterns, and historical crop yields</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                    <div class="grid-container">
                            <div class="section sec-2">
                                <h2>Automationservices</h2>
                                <p>Automated farming systems help farmers to perform tasks efficiently, increase productivity, and reduce labor costs. Automation also provides data analytics that can help farmers make informed decisions about their farming practices</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="grid-container">
                            <div class="section sec-3">
                                <h2>Monitoringservices</h2>
                                <p>Applied in crop monitoring, smart sensing technology collects metrics about the state of the crops (temperature, humidity, health indicators) and enables farmers take timely measures should anything go wrong.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="grid-container">
                            <div class="section sec-4">
                                <h2>DataAnalyticsservices</h2>
                                <p>Smart farming technologies collect data about crops, soil conditions, weather patterns, and more. The data is then analysed to inform decisions that lead to more efficient use of resources like water, fertilizers and crop protection agents. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!--<?php require('footer.php');?>-->
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.review-slider',{
    loop: true,
    grabCursor:true,
    spaceBetween:20,
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        640:{
            slidesPerView: 2,
        },
        768:{
            slidesPerView: 3,
        },
    },
    });
    
  </script>
  <?php require('footer.php');?>
      
</body>
</html>