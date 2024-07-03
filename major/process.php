<?php
   if(isset($_POST['submit'])){
    include "connection.php";
    $otp = mysqli_real_escape_string($conn, $_POST['otp']);

    $sql = "select * from `otp_data` where otp='$otp'";
    $result = mysqli_query($conn, $sql);
    $count_otp = mysqli_num_rows($result);

    $sql = "insert into otp_data(otp) values('$otp')";
    $result = mysqli_query($conn, $sql);
    echo '<script>
            alert("Payment successfull!!");
            window.location.href = "product.php";
        </script>';
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
          body{
            background-color: #98FB98;
          }
          main {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            margin-left: 450px;
            margin-top: 230px;
            }

       
        label {
        display: block;
        margin-bottom: 5px;
        text-align:center;
        }

        input{
        width: 95%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        }
        #btn {
        display: block;
        width: 50%;
        padding: 10px;
        font-size: 18px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left:75px;
        margin-top:10px;
        }

    </style>
</head>
<body>
    <main>
          <form id="credit-card-form" action="process.php" method="POST">
            <label for="otp">Please enter OTP</label>
            <input type="password" id="otp" name="otp"placeholder="******">
            <input type ="submit" id="btn" value="submit" name ="submit"/>
          </form>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>