<!DOCTYPE html>
<html>
<head>
    <title>Soil Moisture Monitoring</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 50%;
            max-width: 1000px; /* Increased container width */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .chart-container {
            margin: 10px 100px 50px 100px;
            width: 80%;
            max-width: 800px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .description {
            color: #666;
            margin-bottom: 20px;
        }

        #update-btn {
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
            transition: background-color 0.3s;
        }

        #update-btn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
</style>
</head>
<body>
    <div class="container">
        <h1>Soil Moisture Monitoring System</h1>

        <div class="chart-container">
            <canvas id="moisture-chart"></canvas>
        </div>
        
        <p class="description" id="description">Predicted Soil Moisture Level: Calculating...</p>

        <button id="update-btn">Update Moisture Level</button>
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
        // Initialize an empty array to store historical data
let historicalData = [];

// Generate mock soil moisture data for demonstration
function generateData() {
    const data = [];
    for (let i = 0; i < 24; i++) {
        data.push(Math.random() * 100); // Random value between 0 and 100 (representing moisture percentage)
    }
    return data;
}

// Create a line chart using Chart.js
function createChart(data) {
    const ctx = document.getElementById('moisture-chart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: Array.from({ length: 24 }, (_, i) => `${i}:00`), // Hourly labels
            datasets: [{
                label: 'Soil Moisture Level (%)',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                pointRadius: 3, // Smaller point radius
                pointHoverRadius: 6 // Larger point radius on hover
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 100
                }
            },
            animation: {
                duration: 0 // Disable chart animation
            }
        }
    });
    return chart;
}

// Load TensorFlow.js and create a simple machine learning model to predict soil moisture levels
async function loadModelAndPredict() {
    // Placeholder for actual model loading and prediction logic
    // For demonstration purposes, returning a random value between 0 and 100
    return Math.random() * 100;
}

// Update description with predicted soil moisture level
async function updateDescription() {
    const predictedMoisture = await loadModelAndPredict();
    const description = document.getElementById('description');
    description.innerText = `Predicted Soil Moisture Level: ${predictedMoisture.toFixed(2)}%`;
}

// Update chart with new data point
function updateChart(chart, newData) {
    // Add new data point
    chart.data.datasets[0].data.push(newData);

    // Remove oldest data point if more than 24 data points
    if (chart.data.datasets[0].data.length > 24) {
        chart.data.datasets[0].data.shift();
    }

    // Update chart
    chart.update();
}

// Update button click event handler
document.getElementById('update-btn').addEventListener('click', async () => {
    updateDescription();
});

// Initial update
updateDescription();

// Generate initial data
const initialData = generateData();

// Create and update chart with initial data
const chart = createChart(initialData);

// Update chart with new data every 5 seconds
setInterval(async () => {
    const newData = await loadModelAndPredict();
    updateChart(chart, newData);
    updateDescription();
    historicalData.push(newData);

    // Perform data analysis and visualization
    const averageMoisture = historicalData.reduce((acc, val) => acc + val, 0) / historicalData.length;
    const trend = newData > averageMoisture ? 'Increasing' : 'Decreasing';
    console.log('Average Moisture:', averageMoisture.toFixed(2), 'Trend:', trend);

    // Alert if moisture level is too high or too low
    if (newData > 80) {
        alert('Moisture level is too high! Consider reducing irrigation.');
    } else if (newData < 20) {
        alert('Moisture level is too low! Consider increasing irrigation.');
    }
}, 5000);

// Log historical data every minute
setInterval(() => {
    console.log('Historical Data:', historicalData);
}, 60000);
    </script>
</body>
</html>