<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        

        /* Footer styles */

      .footer-container {
        background-color: #4CAF50;
        margin: auto;
        height: 230px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .row {
        display: flex;
        flex-wrap: wrap;
      }

      ul {
        list-style: none;
        padding-left: 0;
      }

      .footer-col p {
        font-size: 10px;
        color: #e7e7e7;
      }

      .footer {
        background-color: #ffc107;
        padding: 40px 0;
      }

      .footer-col {
        flex: 1;
        padding: 0 20px;
      }

      .footer-col h4 {
        font-size: 18px;
        color: #fff;
        text-transform: capitalize;
        margin-top: 18px;
        margin-bottom: 20px;
        font-weight: 500;
        position: relative;
      }

      .footer-col h4::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -8px;
        background-color: #ffc107;
        height: 2px;
        box-sizing: border-box;
        width: 30px;
      }

      .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
      }

      .footer-col ul li a {
        font-size: 12px;
        text-transform: capitalize;
        color: #fff;
        text-decoration: none;
        font-weight: 300;
        transition: all 0.3s ease-in-out;
      }

      .footer-col ul li a:hover {
        color: #fff;
        padding-left: 8px;
      }

      .footer-col .social-links {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: #e7e7e7;
        margin: 0 10px;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #4CAF50;
        transition: all 0.5s ease;
      }

      .footer-col .social-links a:hover {
        color: #329036;
        background-color: #fff;
      }

      .footer-bottom {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        width: 100%;
      }

      @media (max-width: 767px) {
        .footer-container {
            height: auto;
            padding: 20px 0;
        }

        .footer-col {
            padding: 0 10px;
            margin-bottom: 30px;
        }

        .footer-col h4 {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .footer-col h4::before {
            width: 20px;
        }

        .footer-col .social-links {
            margin-top: 10px;
        }

        .footer-col .social-links a {
            height: 30px;
            width: 30px;
            line-height: 30px;
        }
      }
        
    </style>
</head>
<body>
<footer>
        <div class="footer-container">
          <div class="row">
            <div class="footer-col">
              <h4>About CropZen</h4>
              <ul>
                <p>CropZen leverages cutting-edge technology to optimize crop management, increase productivity, and
                  provide
                  farmers with real-time data for informed, sustainable practices.</p>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="about.php">About us</a></li>
                <li><a href="services.php">What We Offer</a></li>
                <li><a href="product.php">Our Products</a></li>
                <li><a href="blog.php">Recent Blogs/News</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Order status</a></li>
                <li><a href="#">Payment options</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 CropZen. All Rights Reserved.</p>
        </div>
      </footer>
    </body>
    
    </html>  
