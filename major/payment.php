<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
          body{
            background-color: #98FB98;
          }
            
          .grid-container {
            display: grid;
           /* grid-template-columns: 1fr 1fr;
            gap: 40px;*/
            padding-top: 200px;
            padding-left: 40px;
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
            text-align:center;
            box-shadow: 10px 10px 5px rgb(1,50,32);
        }
        .section a{
            color:#006400;
            padding-right:8px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px 0;
            text-decoration:none;
            font-size:20px;

        }
        form a:hover{
          
          color:white;
          
        }
        .sec-1 {
            background-color: #dbe7e4; /* Light blue-green */
            grid-area: 1 / 1 / 2 / 2;
        }

    </style>
</head>
<body>
    <div class="grid-container">
        <div class="section sec-1">
            <h2>PAYMENT OPTIONS</h2>
            <a class="btn btn-outline-success " type="submit" href="credit.php" target="_blank"><i class="fa-regular fa-credit-card"></i>
            CREDIT CARD</a>
            <a class="btn btn-outline-success" type="submit" href="debit.php" target="_blank"><i class="fa-sharp fa-regular fa-credit-card"></i>
            DEBIT CARD</a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>