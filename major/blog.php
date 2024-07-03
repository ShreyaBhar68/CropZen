<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG </title>
    <style>
        main {
        margin-top: 20px;
        }

        .post {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post-title {
        font-size: 20px;
        margin-bottom: 10px;
        }

        .post-meta {
        color: #666;
        font-size: 14px;
        margin-bottom: 10px;
        }

        .post-content {
        color: #333;
        }
    </style>
</head>
<body>
    <?php require('navbar.php');?>
    <?php require('slide.php');?>
    <main class="container">
        <article class="post">
        <h2 class="post-title">How Smart Farming is Transforming Agriculture</h2>
        <p class="post-meta">By John Doe | April 12, 2024</p>
        <p class="post-content">Discover how smart farming techniques are revolutionizing agriculture and improving crop yields while reducing environmental impact.</p>
        </article>
    
        <article class="post">
        <h2 class="post-title">The Role of IoT in Modern Agriculture</h2>
        <p class="post-meta">By Jane Smith | April 15, 2024</p>
        <p class="post-content">Learn about the benefits of integrating Internet of Things (IoT) devices in farming practices and how it's reshaping the agricultural industry.</p>
        
        </article>
    
        <!-- Add more blog posts as needed -->
    
    </main>
    <?php require('footer.php');?>
</body>
</html>