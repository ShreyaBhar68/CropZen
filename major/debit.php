<?php
   if(isset($_POST['submit'])){
    include "connection.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cardnumber = mysqli_real_escape_string($conn,$_POST['cardnumber']);
    $month = mysqli_real_escape_string($conn,$_POST['month']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);
    $cvv = mysqli_real_escape_string($conn,$_POST['cvv']);

    $sql = "select * from `debitpay_data` where name='$name'";
    $result = mysqli_query($conn, $sql);
    $count_name = mysqli_num_rows($result);

    $sql = "select * from `debitpay_data` where cardnumber ='$cardnumber'";
    $result = mysqli_query($conn, $sql);
    $count_cardnumber = mysqli_num_rows($result);

    $sql = "select * from `debitpay_data` where month='$month'";
    $result = mysqli_query($conn, $sql);
    $count_month = mysqli_num_rows($result);

    $sql = "select * from `debitpay_data` where year='$year'";
    $result = mysqli_query($conn, $sql);
    $count_year = mysqli_num_rows($result);

    $sql = "select * from `debitpay_data` where cvv='$cvv'";
    $result = mysqli_query($conn, $sql);
    $count_cvv = mysqli_num_rows($result);
    
   
    $sql = "insert into debitpay_data(name, cardnumber, month, year, cvv) values('$name', '$cardnumber' , '$month','$year','$cvv')";
    $result = mysqli_query($conn, $sql);
    echo '<script>
            alert("OTP sent successfully!!");
            window.location.href = "process.php";
        </script>';
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dibt card payment</title>
    <style>
     

main {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
  max-width: 400px;
  width: 100%;
  margin-left: 450px;
}

h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 20px;
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input,
select {
  width: 95%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.order-summary {
  background-color: #f9f9f9;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 20px;
}

p {
  margin: 5px 0;
}

#btn {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 18px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#btn:hover {
  background-color: #555;
}

.payment-methods {
  display: flex;
  gap: 10px;
  justify-content: center;
  margin-bottom: 20px;
  align-items: center;
}

.payment-methods input[type="radio"] {
  display: none;
}

.payment-methods label {
  padding: 10px 20px;
  font-size: 18px;
  border-radius: 5px;
  border: 1px solid #ccc;
  cursor: pointer;
}

.payment-methods input[type="radio"]:checked+label {
  background-color: #333;
  color: #fff;
  border-color: #333;
}

.payment-methods input[type="radio"]:checked+label::after {
  content: '\2713';
  display: inline-block;
  margin-left: 10px;
  font-size: 20px;
}

#debit-card-form {
  display: none;
}
  </style>
</head>
<body>
    <?php require('navbar.php');?>
    <main>
  
    <section class="payment-form">
      <h2>Please Enter Debit Card Details</h2>
      <form id="credit-card-form" action="debit.php" method="POST">
       
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter Your Name"  required>
        </div>
        <div class="form-group">
          <label for="card-number">Card Number</label>
          <input type="text" id="cardnumber" name="cardnumber"placeholder="**** **** **** ****"  required>
        </div>
        <div class="form-group">
          <label for="month">Expiry Month</label>
          <input type="text" id="month" name="month"placeholder="month" required>
          <label for="year">Expiry Year</label>
          <input type="text" id="year" name="year"placeholder="Year" required>
        </div>
        <div class="form-group">
          <label for="cvv">CVV</label>
          <input type="password" id="cvv" name="cvv"placeholder="***" required>
        </div>
        <input type ="submit" id="btn" value="submit" name ="submit"/>
      </form>

     
    </section>
  </main>
</body>
</html>