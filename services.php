<?php
// Check if the CSV file path is provided as an argument
if ($argc < 2) {
    echo "Usage: php services.php <csv_file_path>\n";
    exit(1);
}

// Get the CSV file path from the command-line argument
$csvFile = $argv[1];

// Open the CSV file
$fileHandle = fopen($csvFile, 'r');

// Check if the file opened successfully
if ($fileHandle !== false) {
    // Output table header
    echo "+------------------------------------+--------+\n";
    echo "| Service                            | Country|\n";
    echo "+------------------------------------+--------+\n";

    // Initialize an empty array to store the counts for each country
    $countryCounts = [];

    // Loop through each line in the CSV file
    while (($data = fgetcsv($fileHandle)) !== false) {
        // Normalize country code to lowercase
        $country = strtolower($data[3]);

        // Increment the count for the country in the countryCounts array
        if (isset($countryCounts[$country])) {
            $countryCounts[$country]++;
        } else {
            $countryCounts[$country] = 1;
        }

        // Check if the country code matches "de" (Germany) or "DE" (Germany)
        if ($country === 'de' || $country === 'DE') {
            // Display the service and country related information
            printf("| %-34s | %-6s |\n", $data[2], strtoupper($country));
        }
        
    }

    // Output table footer
    echo "+------------------------------------+--------+\n";

    // Display the number of services provided by each country
    echo "Number of services by country:\n";
    foreach ($countryCounts as $country => $count) {
        // Skip displaying the count for "country" key
        if ($country !== 'country') {
            echo "$country: $count\n";
        }
    }

    // Close the file handle
    fclose($fileHandle);
} else {
    // Error handling if file couldn't be opened
    echo "Error: Unable to open file.";
}
?>
