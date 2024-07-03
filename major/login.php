<?php
   if(isset($_POST['submit'])){
    include "connection.php";
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn,$_POST['pass']);
     
    $sql = "select * from `user` where username= '$username' or email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row)
    {
        if(password_verify($password, $row["password"])){
            header("Location: far.php");
        }
    }
    echo '<script>
                alert("Invalid username or password");
                window.location.href = "login.php";
        </script>';
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
      }

      body {
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background: #98FB98;
      }

      .container {
          position: relative;
          width: 256px;
          height: 256px;
          display: flex;
          justify-content: center;
          align-items: center;
      }

      .container span {
          position: absolute;
          left: 0;
          width: 32px;
          height: 6px;
          background:	#00FA9A;
          border-radius: 8px;
          transform-origin: 128px;
          transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
          animation: animateBlink 3s linear infinite;
          animation-delay: calc(var(--i) * (3s / 50));
      }

      @keyframes animateBlink {
          0% {
              background: 	#008000;
          }

          25% {
              background: 	#008000;
          }
      }

      .login-box {
          position: absolute;
          width: 400px;
          /* background: red; */
      }

      .login-box form {
          width: 100%;
          padding: 0 50px;
      }

      h2 {
          font-size: 2em;
          color: #008000;
          text-align: center;
      }

      .input-box {
          position: relative;
          margin: 25px 0;
      }

      .input-box input {
          width: 100%;
          height: 50px;
          background: transparent;
          border: 2px solid #2c4766;
          outline: none;
          border-radius: 40px;
          font-size: 1em;
          color: 	#32CD32;
          padding: 0 20px;
          transition: .5s ease;
      }

      .input-box input:focus,
      .input-box input:valid {
          border-color: #fff;
          
      }

      .input-box label {
          position: absolute;
          top: 50%;
          left: 20px;
          transform: translateY(-50%);
          font-size: 1em;
          color: black;
          pointer-events: none;
          transition: .5s ease;
      }
     

      .input-box input:focus~label,
      .input-box input:valid~label {
          top: 1px;
          font-size: .8em;
          background: #1f293a;
          padding: 0 6px;
          color: 	#32CD32;
      }
      #btn {
          width: 100%;
          height: 45px;
          background: 	#008000;
          border: none;
          outline: none;
          border-radius: 40px;
          cursor: pointer;
          font-size: 1em;
          color:white;
          font-weight: 600;
      }

      .signup-link {
          margin: 20px 0 10px;
          text-align: center;
      }

      .signup-link a {
          font-size: 1em;
          color: 	black;
          text-decoration: none;
          font-weight: 600;
      }

      .signup-link a:hover {
          text-decoration: underline;
      }
      p{
        color:	black;
        font-size: 1rem;
      }
</style>
  </head>

  <body>

    <div class="container">
        <div class="login-box">
            <h2>LOGIN </h2>
            <form name="form" action="login.php" method="POST">
                  <div class="input-box">
                  <input type ="text" id="user" name="user" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                  
                 <input type ="password" id="pass" name="pass" required>
                 <label>Enter password</label>
                </div>
                <input type ="submit" id="btn" value="login" name ="submit"/><br><br>
                <div class="signup-link">
                <p>Don't have an account?<a href="signup.php">     SignUp</a><br>
                 
                </div>
            </form>
        </div>

        <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
        <span style="--i:16;"></span>
        <span style="--i:17;"></span>
        <span style="--i:18;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:21;"></span>
        <span style="--i:22;"></span>
        <span style="--i:23;"></span>
        <span style="--i:24;"></span>
        <span style="--i:25;"></span>
        <span style="--i:26;"></span>
        <span style="--i:27;"></span>
        <span style="--i:28;"></span>
        <span style="--i:29;"></span>
        <span style="--i:30;"></span>
        <span style="--i:31;"></span>
        <span style="--i:32;"></span>
        <span style="--i:33;"></span>
        <span style="--i:34;"></span>
        <span style="--i:35;"></span>
        <span style="--i:36;"></span>
        <span style="--i:37;"></span>
        <span style="--i:38;"></span>
        <span style="--i:39;"></span>
        <span style="--i:40;"></span>
        <span style="--i:41;"></span>
        <span style="--i:42;"></span>
        <span style="--i:43;"></span>
        <span style="--i:44;"></span>
        <span style="--i:45;"></span>
        <span style="--i:46;"></span>
        <span style="--i:47;"></span>
        <span style="--i:48;"></span>
        <span style="--i:49;"></span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>