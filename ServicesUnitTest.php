<?php

// Refactoring services.php code into reusable functions/classes
class ServicesUnitTest {              // logic from services.php is extracted into a class here
    public function countServicesByCountry($csvFile) {
        $fileHandle = fopen($csvFile, 'r');
        $countryCounts = [];

        if ($fileHandle !== false) {     // Check if the file opened successfully

            // Check to loop through each line in the CSV file
            // Check to normalize country code to lowercase
            while (($data = fgetcsv($fileHandle)) !== false) {
                $country = strtolower($data[3]);      //

                if (isset($countryCounts[$country])) {
                    $countryCounts[$country]++;
                } else {
                    $countryCounts[$country] = 1;
                }
            }
            fclose($fileHandle);
        } else {              // Error handling if file couldn't be opened
            throw new Exception("Unable to open file.");
        }

        return $countryCounts;  // Return the array containing counts of services grouped by country
    }
}
// Create an instance of the ServicesUnitTest class to access the countServicesByCountry method
$csvServiceCounter = new ServicesUnitTest();

// Call the countServicesByCountry method with the provided CSV file path
$countryCounts = $csvServiceCounter->countServicesByCountry($argv[1]);

foreach ($countryCounts as $country => $count) {
    echo "$country: $count\n";
}
?>
