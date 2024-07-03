

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Our Services</title>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body{
        background-color: #B2D3C2;
        }
    /* Navbar styles */

    .navbar {
        background-color: #4CAF50;
        padding: 6px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .logo img {
        height: 25px;
        }

        .menu a {
        color: white;
        text-decoration: none;
        padding: 7px 9px;
        margin-left: 20px;
        }

        .menu button {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        margin-left: 10px;
        cursor: pointer;
        }

        .menu a:hover,
        .menu button:hover {
        background-color: #3e8e41;
        border-radius: 5px;
        }

        .menu a.active {
        background-color: #3e8e41;
        border-radius: 5px;
        }

        .auth-buttons {
        display: flex;
        align-items: center;
        }

        .auth-buttons button {
        padding: 7px 9px;
        margin-left: 10px;
        background-color: transparent;
        color: white;
        border: 1px solid white;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        }

        .auth-buttons button:hover {
        background-color: white;
        color: #4CAF50;
        }

        @media screen and (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .menu {
            margin-top: 10px;
        }

        .menu a,
        .menu button {
            display: block;
            margin: 5px 0;
        }
        }
        .d-flex .btn{
          color:green;
          padding-right:8px;
          cursor: pointer;
          margin: 5px 0;
          font-size:20px;
          font-family:Serif;
          text-transform:uppercase;
          text-decoration:none;
        }
        ::-webkit-scrollbar {
            width: 10px;
          }

          ::-webkit-scrollbar-track {
            background: rgb(255,255,255);
          }

          ::-webkit-scrollbar-thumb {
            border-radius: 3px;
            background-color: #006400;
          }


        
</style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
          <img src="CropZen_logo.png" alt="Smart Farming System">
        </div>
        <div class="menu">
          <a href="far.php" class="active" target="_blank">Home</a>
          <a href="about.php"target="_blank">Who We Are</a>
          <a href="services.php"  target="_blank">Get The Services</a>
          <a href="product.php"target="_blank">Products</a>
          <a href="blog.php"target="_blank">Our Blogs</a>
          <a href="feedback.php"target="_blank">Feedback</a>
        </div>
        <form class="d-flex">
            <a class="btn" type="submit" href="welcome.php">Login/Signup</a>
        </form>
      </div>

</body>
</html>