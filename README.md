# User-Information-Management
This project is a simple web application for managing people's data using PHP and MySQL.

It allows you to add people to a database, display them, and toggle their activation status using **AJAX and PHP.

## Project Contents

1. Database:
   - *my_test*: The database used to store people's data.
   - *users*: The table containing the following columns:
     - id: The person's identifier (Primary Key).
     - name: The person's name.
     - age: The person's age.
     - status: The person's status (0 = inactive, 1 = active).

2. Main Files:
   - *index.php*: The main page for displaying and adding people.
   - *insert.php*: The file for inserting new data into the database.
   - *toggle.php*: The file for toggling the person's status (from active to inactive).
   - *db.php: The file responsible for database connection using *PDO.
   - *script.js: The file containing the *JavaScript code for interacting with the page using AJAX.
   - *style.css*: The file containing the page's styling.

## Installation and Setup

### 1. *Install XAMPP 
   - Make sure you have XAMPP installed on your computer to run Apache and MySQL.

### 2. Create the Database
   - Open phpMyAdmin.
   - Create a new database named *my_test*.
   - Use the following SQL query to create the table:

   ```sql
   CREATE DATABASE IF NOT EXISTS my_test
     CHARACTER SET utf8mb4
     COLLATE utf8mb4_unicode_ci;

   USE my_test;

   CREATE TABLE IF NOT EXISTS users (
       id     INT AUTO_INCREMENT PRIMARY KEY,
       name   VARCHAR(100) NOT NULL,
       age    INT          NOT NULL,
       status TINYINT(1) DEFAULT 0           -- 0 = inactive, 1 = active
   );

Move Files to the XAMPP Directory
	•	Place all the project files in the htdocs folder in XAMPP.
4. Start Apache and MySQL
	•	Open XAMPP and start the Apache and MySQL services.

5. Access the Project
	•	Open your browser and go to http://localhost/my-project1/index.php to view the application.

How to Use
	1.	Add a New Person:
	•	On the main page, enter a Name and Age for the person, then click Submit to add the person to the database.
	2.	View Current Records:
	•	All people are displayed in a table with their ID, Name, Age, and Status.
	3.	Toggle Person’s Status:
	•	For each person, there is a Toggle button to switch their status between Active and Inactive. The toggle happens using AJAX without page reload.

Technologies Used
	•	PHP: For server-side processing and data handling.
	•	MySQL: For storing the data.
	•	AJAX (JavaScript): For dynamic updates without reloading the page.
	•	HTML/CSS: For the user interface and styling.

Known Issues
	•	When adding more than 4 people to the database, id values may exceed 4. However, you can reset the AUTO_INCREMENT to the desired value.
