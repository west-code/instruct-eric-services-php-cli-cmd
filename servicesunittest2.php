<?php

//fetch PHP libraries for Test
use PHPUnit\Framework\TestCase;

// Run the script with the test CSV file
require_once 'ServicesUnitTest.php'; // class is in ServicesUnitTest.php

class ServicesUnitTestTest extends TestCase {         // Create a test class for the ServicesUnitTest class

    // Test case to verify countServicesByCountry method of the class ServiceUnitTest
    public function testCountServicesByCountry() {
        $csvServiceCounter = new ServicesUnitTest();
        $countryCounts = $csvServiceCounter->countServicesByCountry('services.csv'); // Testing the CSV file

        // Assert expected counts for specific countries
        $this->assertEquals(9, $countryCounts['FR']);
        $this->assertEquals(2, $countryCounts['DE']);
        $this->assertEquals(1, $countryCounts['GB']);
        // Would add more assertions for other countries as needed if necessary
    }
}
?>
