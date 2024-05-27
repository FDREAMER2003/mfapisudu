<?php
if (isset($_GET['fund_code'])) {
    $fund_code = htmlspecialchars($_GET['fund_code']);
    $api_url = "https://api.mfapi.in/mf/" . $fund_code;

    // Initialize a cURL session
    $ch = curl_init();

    // Set the URL
    curl_setopt($ch, CURLOPT_URL, $api_url);

    // Return the response as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the request
    $response = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response
    $data = json_decode($response, true);

    if ($data) {
        // Display the mutual fund data
        echo "<div class='result'>";
        echo "<h1>Mutual Fund Details for " . $data['meta']['scheme_name'] . "</h1>";
        echo "<p><strong>Fund House:</strong> " . $data['meta']['fund_house'] . "</p>";
        echo "<p><strong>Scheme Type:</strong> " . $data['meta']['scheme_type'] . "</p>";
        echo "<p><strong>Scheme Category:</strong> " . $data['meta']['scheme_category'] . "</p>";
        echo "<p><strong>Net Asset Value (NAV):</strong> " . $data['data'][0]['nav'] . "</p>";
        echo "<p><strong>Date:</strong> " . $data['data'][0]['date'] . "</p>";
        echo "</div>";
    } else {
        echo "<div class='error'><p>Invalid Fund Code or No Data Available.</p></div>";
    }
} else {
    echo "<div class='error'><p>Please provide a mutual fund code.</p></div>";
}
?>
