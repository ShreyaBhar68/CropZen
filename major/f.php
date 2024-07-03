<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        text-transform: capitalize;
        outline: none;
        text-decoration: none;
        border:none;
        transition: all .2s linear;
        }
        body{
        background-color: #B2D3C2;
        }
        html{
            overflow-x: hidden;
            scroll-padding-top: 6rem;
            scroll-behavior: smooth;
        }
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
            /* Darker green on hover */
            border-radius: 5px;
        }

        .menu a.active {
            background-color: #3e8e41;
            /* Active link color */
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
        </style>
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">
              <img src="CropZen_logo.png" alt="Smart Farming System">
            </div>
            <div class="menu">
              <a href="far.php">Home</a>
              <a href="about.html">About Us</a>
              <a href="services.php">Services</a>
              <a href="products.html">Products</a>
              <a href="contact.html" class="active">Contact Us</a>
            </div>
            <div class="auth-buttons">
              <button onclick="openLoginModal()">Login</button>
              <button onclick="openSignupModal()">Signup</button>
            </div>
        </div>
    </header>
<script>
    function openLoginModal() {
    document.getElementById('loginPopup').style.display = 'block';
  }
  
  function closeLoginModal() {
    document.getElementById('loginPopup').style.display = 'none';
  }
  
  function showEmailAuth() {
    document.getElementById('emailAuth').style.display = 'block';
    document.getElementById('phoneAuth').style.display = 'none';
  }
  
  function showPhoneAuth() {
    document.getElementById('emailAuth').style.display = 'none';
    document.getElementById('phoneAuth').style.display = 'block';
  }  
  
  function loginWithGoogle() {
    // Handle Google login
    alert('Login with Google');
  }
  
  function loginWithFacebook() {
    // Handle Facebook login
    alert('Login with Facebook');
  }
  
  function openSignupModal() {
    document.getElementById('signupPopup').style.display = 'block';
    // Close the login popup
    closeLoginModal();
}

// Check if user is logged in
const isLoggedIn = false; // Set to true if user is logged in

if (!isLoggedIn) {
    openLoginModal();
}
</script>
</body>
</html>-->