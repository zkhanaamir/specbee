# Drupal Setup and Database
This guide provides instructions on setting up Drupal and creating the database.

## Drupal Setup
### Requirements
   - Drupal Version: 10.1.1
   - Web Server: Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6
   - PHP: 8.1.6 
   - Database: 10.4.24-MariaDB
   
### Installation Steps

1. Clone the Drupal repository from the official Git repository: 
   - git clone https://github.com/zkhanaamir/specbee.git

2. Create a new database for Drupal:
   - Log in to your MySQL or MariaDB database server.
   - Create a new database (e.g., specbee-test) for your Drupal installation.
   - CREATE DATABASE specbee-test;

3. Please get the database from the db folder in the root directory.

4. Import database
   - Import the database dump: mysql -u your_database_username -p specbee-test < database/specbee-test.sql

5. Install Drupal:
   - Navigate to the Drupal directory you cloned in Step 1.
   - Copy the default settings file and rename it:
   - Update the settings.php file with your database credentials:
   - Complete the installation process by visiting your Drupal site URL in a web browser.
   - phpCopy code$databases['default']['default'] = array(
         'database' => 'specbee-test',
         'username' => 'your_database_username',
         'password' => 'your_database_password',
         'host' => 'localhost', // Change this if your database is hosted elsewhere.
         'port' => '3306',      // Change this if your database is using a different port.
         'driver' => 'mysql',
         'prefix' => '',
      );

6. Please find attached screenshot of my task for your reference     
<img width="953" alt="project" src="https://github.com/zkhanaamir/specbee/assets/114986833/65b0dff6-1344-49af-bebf-015e854bad0c">

     
