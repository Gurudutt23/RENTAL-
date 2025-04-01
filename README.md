## Overview
This is a dynamic rental management website aimed at saving time and solving rental-related problems for both renters and tenants. The website is designed with a secure user authentication system (Sign Up/Login), database integration, and API functionality. The platform allows seamless interaction between users and property owners while ensuring smooth browsing, booking, and communication.

## Features
- **User Authentication**: Secure Sign Up and Login system for both renters and tenants.
- **Property Listings**: Owners can list available properties with descriptions, images, and rental prices.
- **Responsive Web Design**: The website is designed to work seamlessly across all devices using Bootstrap for optimal performance.
- **Database Management**: Managed and manipulated databases using MySQL and MongoDB for efficient data handling.
- **API Integration**: Integrated external APIs for extended functionality and data retrieval.

## Technologies Used
- **Frontend**: HTML, CSS, Bootstrap, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Authentication**: Secure user authentication system with Sign Up/Login functionality

## Installation

### Prerequisites
Ensure you have the following installed:
- **XAMPP** (which includes Apache and MySQL for local server and database management)
- **MySQL** (for the database)

### Steps to open the project using XAMPP:

1. **Download and Install XAMPP**:
   - Go to [XAMPP Official Website](https://www.apachefriends.org/index.html) and download the installer for your operating system.
   - Follow the installation steps.

2. **Clone the Repository**:
    ```bash
    git clone https://github.com/Gurudutt23/RENTAL-.git
    ```

3. **Move the Project to the XAMPP `htdocs` Folder**:
   - After cloning, move your project folder into the `htdocs` folder, which is the root directory for your local server in XAMPP. The location is usually `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.

4. **Start XAMPP**:
   - Open the XAMPP Control Panel and start **Apache** and **MySQL** services to run the web server and the database.
   - Ensure that your **MySQL** server is running to handle the database requests.

5. **Set Up the Database**:
   - Open **phpMyAdmin** in your browser by navigating to `http://localhost/phpmyadmin/`.
   - Create a new database for your project (e.g., `rental_db`).
   - Import the SQL file from your project directory to set up the required tables in the database.

6. **Configure the Database in the Code**:
   - Open the project files and configure the database connection in the relevant PHP files (usually in a `db_con.php` or similar file).
   - Update the database name, username, and password to match your local XAMPP settings.

7. **Access the Project**:
   - Open your browser and go to `http://localhost/main_page.php` to view the website.
   - The website should now be up and running locally.
