# instruct-eric-services-php-cli-cmd
# How to run software from a serverless point through command line interface

1. Put the services.php file and services.csv file in the same folder in your PC. For example Downloads folder
2. Go to cli command terminal and change directory into the folder where the files are
3. Enter "cd /downloads/runservices"  ======> The "downloads" and "runservives" folder are example folders
4. Enter "php services.php services.csv" and watch the cli output the results from the csv file

PS: Unit test is written in the servicesunittest.php file.
    PHPUnit needs to be installed and configured on the machine for the code to run as usual. Run the test by executing the PHPUnit command in the directory containing both services.php and servicesunittest.php file
