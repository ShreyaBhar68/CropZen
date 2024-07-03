<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHO WE ARE</title>
    <style>

        /* About section */
        .about-section {
            text-align: center;
            margin: 60px auto;
            padding: 50px;
            background-color: rgb(143, 233, 102);
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
        }

        .about-section h1 {
            font-size: 36px;
            color: #0c0c0c;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.6;
            color: #0a0a0a;
            margin-bottom: 20px;
        }

        /* Grid container */
        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Grid card */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: transform 0.3s; /* Added transition for zoom effect */
            width: 300px;
            margin: 50px;
            border-radius: 30px;
            overflow: hidden;
        }

        /* Grid image */
        .card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Grid container */
        .container {
            padding: 20px;
            text-align: center;
        }

        /* Grid title */
        .container h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Grid subtitle */
        .container .title {
            color: rgb(15, 15, 15);
            font-size: 18px;
        }

        /* Grid description */
        .container p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Grid links */
        .container a {
            text-decoration: none;
            font-size: 16px;
            color: rgb(236, 9, 123);
        }

        /* Grid hover effect */
        .card:hover {
            transform: scale(1.05); /* Zoom in effect */
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

            /* Different card colors */
            .card:nth-child(odd) {
                background-color: #b2f089; 
            }

            .card:nth-child(even) {
                background-color: #b2f089; 
        }
</style>
</head>
<body>
    <?php require('navbar.php');?>
    <?php require('slide.php');?>
          <!-- about us -->
    <div class="about-section">
        <h1>About Us</h1>
        <p>Welcome to our smart farming system, where innovation meets sustainability to revolutionize agriculture. At our core, we are dedicated to harnessing cutting-edge technology to optimize every aspect of farming, from cultivation to distribution.</p>
        <p>Our commitment extends beyond efficiency to environmental stewardship, as we strive to foster practices that promote biodiversity and mitigate climate change. Join us in shaping the future of agriculture, where tradition meets innovation for a greener, smarter tomorrow.</p>
    </div>
    
    <h1 style="text-align:center">Our Team</h1>
    
    <div class="row">
    <div class="card">
            <img src="rupsa.jpg" alt="Rupsa">
            <div class="container">
                <h2>RUPSA DAS</h2>
                <p class="title">Member 2</p>
                <p>I'm Rupsa Das, currently in my third year of BCA at Narula Institute of Technology. Excitingly, me & my team members (Shreya Bhar & Nandita Mukherjee) create our major project the topic is "smart farming system". By integrating sensors, IoT devices, and data analytics, we empower farmers to make informed decisions in real-time, enhancing crop yields while minimizing resource usage.</p>
                <p>Email: <a href="mailto:rupsadas334@gmail.com">rupsadas334@gmail.com</a></p>
            </div>
        </div>
        <div class="card">
            <img src="nandita.jpg" alt="Nandita">
            <div class="container">
                <h2>NANDITA MUKHERJEE</h2>
                <p class="title">Member 1</p>
                <p>I'm Nandita Mukherjee, currently in my third year of BCA at Narula Institute of Technology. Excitingly, me & my team members (Rupsa Das & Shreya Bhar) create our major project the topic is "smart farming system". By integrating sensors, IoT devices, and data analytics, we empower farmers to make informed decisions in real-time, enhancing crop yields while minimizing resource usage.</p>
                <p>Email: <a href="mailto:nmukherjee085@gmail.com">nmukherjee085@gmail.com</a></p>
            </div>
        </div>
        
       
        
        <div class="card">
            <img src="shreya.jpg" alt="Shreya">
            <div class="container">
                <h2>SHREYA BHAR</h2>
                <p class="title">Member 3</p>
                <p>I'm Shreya Bhar, currently in my third year of BCA at Narula Institute of Technology. Excitingly, me & my team members (Rupsa Das & Nandita Mukherjee) create our major project the topic is "smart farming system". By integrating sensors, IoT devices, and data analytics, we empower farmers to make informed decisions in real-time, enhancing crop yields while minimizing resource usage.</p>
                <p>Email: <a href="mailto:shreyabhar3@gmail.com">shreyabhar3@gmail.com</a></p>
            </div>
        </div>
    </div>
    <?php require('footer.php');?>
</body>
</html>
