<!DOCTYPE html>
<html>
<head>
    <title>Crop Health Monitoring System</title>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/knn-classifier"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/crop.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .output {
            margin-top: 20px;
            text-align: center;
        }

        #image-preview {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #result {
            font-weight: bold;
            color: #333;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Crop Health Monitoring System</h1>
        <input type="file" id="image-upload" accept="image/*">
        <div class="output">
            <img id="image-preview" alt="Preview Image">
            <div id="result"></div>
        </div>
    </div>
<script>
    // Load the MobileNet model
let model;
(async () => {
    model = await mobilenet.load();
})();

// Handle image upload
const inputElement = document.getElementById('image-upload');
inputElement.addEventListener('change', handleImageUpload);

async function handleImageUpload() {
    const file = inputElement.files[0];
    if (!file) return;

    // Display the selected image
    const img = document.getElementById('image-preview');
    img.src = URL.createObjectURL(file);

    // Classify the image
    const predictions = await classifyImage(img);
    displayResults(predictions);
}

async function classifyImage(img) {
    const tensor = tf.browser.fromPixels(img)
        .resizeNearestNeighbor([224, 224])
        .toFloat()
        .expandDims();

    const predictions = await model.classify(tensor);
    return predictions;
}

function displayResults(predictions) {
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = '';
    predictions.forEach(prediction => {
        const { className, probability } = prediction;
        const percentage = (probability * 100).toFixed(2);
        const resultLine = document.createElement('p');
        resultLine.textContent = `${className}: ${percentage}%`;
        resultElement.appendChild(resultLine);
    });
}
</script>
</body>
</html>