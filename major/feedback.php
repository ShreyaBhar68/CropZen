<?php
   if(isset($_POST['submit'])){
    include "connection.php";
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['mess']);
    $rate = mysqli_real_escape_string($conn,$_POST['rate']);

    $sql = "select * from `feedback_data` where username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from `feedback_data` where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    $sql = "select * from `feedback_data` where message='$message'";
    $result = mysqli_query($conn, $sql);
    $count_mess = mysqli_num_rows($result);
   
    $sql = "insert into feedback_data(username, email, message, rate) values('$username', '$email' , '$message','$rate')";
    $result = mysqli_query($conn, $sql);
    echo '<script>
            alert("feedback successfully stored!!");
            window.location.href = "feedback.php";
        </script>';
    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <style>
        .contact-container {
            max-width: 800px;
            margin: 45px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            }

            .contact-info {
            flex: 1;
            margin-right: 20px;
            }

            .contact-info a {
            text-decoration: none;
            cursor: pointer;
            color: #4CAF50;
            }

            .contact-info a:hover {
            color: #329036;
            }

            .contact-form {
            flex: 1;
            }

            .contact-form form {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            }

            .contact-form label {
            display: block;
            margin-bottom: 5px;
            }

            .contact-form input[type="text"],
            .contact-form input[type="email"],
            .contact-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            }

            .contact-form input[type="submit"] {
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            .contact-form input[type="submit"]:hover {
            background-color: #45a049;
            }

            /* Star rating styles */

            .rating {
            display: inline-block;
            direction: rtl;
            }

            .rating input {
            display: none;
            }

            .rating label {
            float: right;
            cursor: pointer;
            color: #ccc;
            margin-right: 5px;
            font-size: 0;
            }

            .rating label:before {
            content: '\2605';
            font-size: 20px;
            }

            .rating input:checked ~ label:before {
            color: #ffc107;
            }
</style>
</head>
<body>
    <?php require('navbar.php');?>
    <?php require('slide.php');?>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Have a question or want to say hello? Feel free to get in touch!</p>
            <p>Email: <a href="mailto:cropzen41668@gmail.com">cropzen41668@gmail.com</a></p>
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="user" name="user" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message:</label>
                <textarea id="mess" name="mess" placeholder="Your Message" required></textarea>

                <label for="rating">Rating:</label>
                <div class="rating">
                    <input type="radio" id="star5" name="rate" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rate" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rate" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rate" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rate" value="1">
                    <label for="star1"></label>
                </div>

                <br>
                <input type ="submit" id="btn" value="submit" name ="submit"/>
            </form>
        </div>
    </div>
    <?php require('footer.php');?>
    
</body>
</html>