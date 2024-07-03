<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }
        .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        padding: 20px;
        }

        .headings {
        text-align: center;
        margin-bottom: 40px;
        }

        .headings h2 {
        font-family: 'Arial Black', sans-serif;
        font-size: 2.5em;
        color: #333;
        margin: 20px;
        }

        .headings p {
        font-family: 'Arial', sans-serif;
        font-size: 1.2em;
        color: #666;
        line-height: 1.5;
        }
        .grid-item {
            display: flex;
            justify-content: center;
        }

            .card {
            width: 100%;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            
            }

        .icon {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #4CAF50;
        font-size: 48px;
        margin-top: 15px;
        }

        .card-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        }

        .card-content h2,
        .card-content p {
        margin-bottom: 10px;
        }

        .know-more-btn {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        }

        .know-more-btn:hover {
        background-color: #45a049;
        }

        @media screen and (max-width: 1024px) {
        .grid-container {
            grid-template-columns: repeat(3, 1fr);
        }
        }

        @media screen and (max-width: 768px) {
        .grid-container {
            grid-template-columns: repeat(2, 1fr);
        }
        }

        @media screen and (max-width: 480px) {
        .grid-container {
            grid-template-columns: 1fr;
        }
        }
    </style>
</head>
<body>
    <?php require('navbar.php');?>
   
    
    <?php require('slide.php');?>

  <div class="grid-container">
    <div class="grid-item">
      <div class="card">
        <div class="icon">
          <i class="fas fa-tint"></i>
      </div>
        <div class="card-content">
          <h2>Soil Moisture Monitoring</h2>
          <p>Our soil moisture monitoring service offers real-time data on soil moisture levels, aiding informed irrigation decisions. By measuring moisture accurately, optimize watering, reduce water usage, and prevent under or over-watering. Essential for maximizing yield, improving soil health, and promoting sustainability.</p>
          <a href="soil_moisture.php" class="know-more-btn"target="_blank">Know More</a>
        </div>
      </div>
    </div>

    <div class="grid-item">
      <div class="card">
        <div class="icon">
          <i class="fas fa-cloud-sun"></i>
        </div>
        <div class="card-content">
          <h2>Weather Condition Monitoring</h2>
          <p>Our weather condition monitoring service provides current weather data, aiding planting and harvesting decisions. Monitor temperature, humidity, precipitation, and wind speed, anticipate risks like droughts, floods, or extreme temperatures. Protect crops, maximize yields.</p>
          <a href="weather_condition.php" class="know-more-btn" target="_blank">Know More</a>
        </div>
      </div>
    </div>

    <div class="grid-item">
      <div class="card">
        <div class="icon">
          <i class="fas fa-leaf"></i>
      </div>      
        <div class="card-content">
          <h2>Crop Health Monitoring</h2>
          <p>Our crop health monitoring service delivers insights into crop conditions, identifying pests, diseases, and nutrient deficiencies early. Utilizing drones, sensors, satellite imagery, track indicators like leaf color, growth, moisture. Timely actions reduce loss, optimize yields, promote sustainability.</p>
          <a href="crop.php" class="know-more-btn"target="_blank">Know More</a>
        </div>
      </div>
    </div>

    <div class="grid-item">
      <div class="card">
        <div class="icon">
          <i class="fas fa-bug"></i>
      </div>      
        <div class="card-content">
          <h2>pest management Technique</h2>
          <p>Our pest management techniques provide effective, sustainable pest control solutions. Utilize monitoring systems, precision application, biological controls. Detect pests early, target effectively, reduce chemical use. Protect crops, minimize losses, promote sustainability.</p>
          <a href="Pest_Management.php" class="know-more-btn">Know More</a>
        </div>
      </div>
    </div>
  </div>
    
    <?php require('footer.php');?>
</body>
</html>