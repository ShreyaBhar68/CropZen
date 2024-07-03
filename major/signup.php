<?php
   if(isset($_POST['submit'])){
    include "connection.php";
    $usertype = $_POST['type'];
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword= $_POST['cpass'];

    $sql = "select * from `user` where usertype='$usertype'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from `user` where username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from `user` where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);
    if($count_user==0 || $count_email==0){
      if($password==$cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "insert into user(usertype, username, email, password) values('$usertype', '$username', '$email' , '$hash')";
        $result = mysqli_query($conn, $sql);
        echo '<script>
          alert("sucessful");
          window.location.href = "login.php";
        </script>';
      }
      else{
        echo '<script>
          alert("password do not match");
          window.location.href = "signup.php";
        </script>';
      }
    }
      else{
        echo '<script>
          alert("already exist!!");
          window.location.href = "signup.php";
        </script>';
      }
    }

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
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
          width: 500px;
          height: 500px;
          display: flex;
          justify-content: center;
          align-items: center;
          border: 6px solid #2c4766;
          border-radius:50px;
      }
      .container:hover{
        border: 6px solid #6ecc32;
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
          margin-top:10px;
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
          border-color: 	#32CD32;
          
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

      
</style>
  </head>

  <body>

    <div class="container">
        <div class="login-box">
            <h2>SIGNUP </h2>
            <form name="form" action="signup.php" method="POST">
                  <div class="input-box">
                      <input type ="text" id="type" name="type" required>
                      <label>UserType(farmers/customers)</label>
                  </div>
                  <div class="input-box">
                    <input type ="text" id="user" name="user" required>
                    <label>Enter username</label>
                </div>
                <div class="input-box">   
                  <input type ="email" id="email" name="email" required>
                  <label>Enter email</label>
                </div>
                <div class="input-box">   
                  <input type ="password" id="pass" name="pass" required>
                  <label>Enter password</label>
                </div>
                <div class="input-box">   
                  <input type ="password" id="cpass" name="cpass" required><br>  
                  <label>Confirm password</label>
                </div>
                <input type ="submit" id="btn" value="SignUp" name ="submit"/><br><br>
    
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>