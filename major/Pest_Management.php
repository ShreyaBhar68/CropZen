<!DOCTYPE html>
<html>
<head>
    <title>Pest Management System</title>
</head>
<body>
    <h1>Pest Management System</h1>
    <form action="/manage_pests" method="post">
        <label for="crop">Select Crop:</label>
        <select id="crop" name="crop">
            <option value="Potato">Potato</option>
            <option value="Tomato">Tomato</option>
            <option value="Wheat">Wheat</option>
            <option value="Corn">Corn</option>
            <option value="Rice">Rice</option>
            <option value="Soybean">Soybean</option>
            <option value="Cotton">Cotton</option>
            <option value="Barley">Barley</option>
            <option value="Sugarcane">Sugarcane</option>
            <option value="Apple">Apple</option>
        </select><br><br>
        <label for="pest_type">Select Pest Type:</label>
        <select id="pest_type" name="pest_type">
            <option value="Aphids">Aphids</option>
            <option value="Armyworm">Armyworm</option>
            <option value="Bollworm">Bollworm</option>
            <option value="Cutworm">Cutworm</option>
            <option value="Leafhopper">Leafhopper</option>
            <option value="Whitefly">Whitefly</option>
            <option value="Thrips">Thrips</option>
            <option value="Mites">Mites</option>
            <option value="Leafminer">Leafminer</option>
            <option value="Beetle">Beetle</option>
        </select><br><br>
        <label for="management_strategy">Select Management Strategy:</label>
        <select id="management_strategy" name="management_strategy">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
        </select><br><br>
        <input type="submit" value="Manage Pests">
    </form>

<script>
    $(document).ready(function() {
    $('#pestForm').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Get the selected values from the dropdowns
        var crop = $('#crop').val();
        var pestType = $('#pest_type').val();
        var managementStrategy = $('#management_strategy').val();

        // Send the selected values to the server using AJAX
        $.ajax({
            type: 'POST',
            url: '/manage_pests',
            data: {
                crop: crop,
                pest_type: pestType,
                management_strategy: managementStrategy
            },
            success: function(response) {
                // Handle the response from the server
                console.log(response);
                alert('Pest management request submitted successfully!');
            },
            error: function(error) {
                // Handle any errors that occur during the request
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });
});
</script>

</body>
</html>