<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MFAPI Example</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Mutual Fund Information</h1>
    <form id="mf-form">
        <label for="fund_code">Enter Mutual Fund Code:</label>
        <input type="text" id="fund_code" name="fund_code" required>
        <button type="submit">Fetch Details</button>
    </form>
    <div class="result"></div>
    <script src="js/scripts.js"></script>
</body>
</html>
