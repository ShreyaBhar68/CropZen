<!DOCTYPE html>
<html>
<head>
    <title>Weather Condition Monitoring</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <style>
      /* Reset default margin and padding */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* Container for the entire page content */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header style */
        h1 {
            color: #333;
        }

        /* Weather info section */
        .weather-info {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ccc;
        }

        .weather-data p {
            margin: 5px 0;
        }

        /* Weather icon style */
        .weather-icon {
            color: #5ec63b;
            font-size: 16px;
            margin-right: 5px;
        }

        /* Chart container style */
        .chart-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        /* Description text style */
        .description {
            margin-top: 20px;
            font-style: italic;
        }

        /* Responsive styling */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
            .chart-container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather Condition Monitoring System</h1>

        <div class="weather-info">
            <h2>Current Weather</h2>
            <div class="weather-data">
                <p><i class="fas fa-thermometer-half weather-icon"></i> <strong>Temperature:</strong> <span id="temperature">Calculating...</span> &deg;C</p>
                <p><i class="fas fa-tint weather-icon"></i> <strong>Humidity:</strong> <span id="humidity">Calculating...</span>%</p>
                <p><i class="fas fa-wind weather-icon"></i> <strong>Wind Speed:</strong> <span id="wind-speed">Calculating...</span> km/h</p>
                <p><i class="fas fa-cloud-sun weather-icon"></i> <strong>Weather:</strong> <span id="weather">Calculating...</span></p>
            </div>
        </div>
        
        <div class="chart-container">
            <canvas id="weather-chart"><</canvas>
        </div>        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/speech-commands"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/knn-classifier"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/handpose"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-landmarks-detection"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-expression-recognition"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/universal-sentence-encoder"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/handpose"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-landmarks-detection"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-expression-recognition"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/universal-sentence-encoder"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/handpose"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-landmarks-detection"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-expression-recognition"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/universal-sentence-encoder"></script>
    <script>
        const apiKey = 'a1aba93dff83394ca17c4b5e68111735'; // Replace 'YOUR_API_KEY' with your actual API key
const units = 'metric'; // Units for temperature (metric for Celsius)

async function getWeatherDataForCurrentLocation() {
    try {
        // Get user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(async function(position) {
                const { latitude, longitude } = position.coords;

                // Fetch weather data for current location
                const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}&units=${units}`;
                const response = await fetch(apiUrl);
                const data = await response.json();

                // Process weather data
                const temperature = data.main.temp;
                const humidity = data.main.humidity;
                const windSpeed = data.wind.speed;
                const weatherDescription = data.weather[0].description;

                // Update UI with weather data
                document.getElementById('temperature').textContent = temperature;
                document.getElementById('humidity').textContent = humidity;
                document.getElementById('wind-speed').textContent = windSpeed;
                document.getElementById('weather').textContent = weatherDescription;

                // Create a radar chart
                const ctx = document.getElementById('weather-chart').getContext('2d');
                const weatherChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['Temperature', 'Humidity', 'Wind Speed'],
                        datasets: [{
                            label: 'Weather Data',
                            data: [temperature, humidity, windSpeed],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)', // Red for Temperature
                                'rgba(54, 162, 235, 0.2)', // Blue for Humidity
                                'rgba(255, 206, 86, 0.2)'  // Yellow for Wind Speed
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 2 // Make the lines thicker
                        }]
                    },
                    options: {
                        scale: {
                            ticks: { beginAtZero: true }
                        }
                    }
                });

            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    } catch (error) {
        console.error('Error fetching weather data:', error);
    }
}

getWeatherDataForCurrentLocation();
    </script>
    
</body>
</html>