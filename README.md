# instruct-eric-services-php-cli-cmd
# How to run software from a serverless point through command line interface

Put the services.php file and services.csv file in the same folder in your PC. For example Downloads folder
Go to cli command terminal and change directory into the folder where the files are
Enter "cd runservices"  ======> The runservives" folder is an example folder

1. Enter "php services.php services.csv" and hit Enter. Watch the cli output the results from the csv file for the first and second question

PS: Unit test is written in the ServicesUnitTest.php file and servicesunittest2.php file
    There are two unit test files to refactor the code to separate the logic into reusable functions/classes to allow unit testing independently with the logic extracted into a class.

    PHPUnit needs to be installed and configured on the machine for the code to run as usual. Run the test by executing the PHPUnit command in the directory containing both services.php and servicesunittest.php file
    The unit test verifies the functionality of the CSV reading code
