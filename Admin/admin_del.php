<?php
        // set the servername,username and password
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Mangkuk";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Create database
        //mysqli_query() function performs a query against a database.

        $sql = "CREATE DATABASE Mangkuk";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }

        // sql to create table
        $sql = "CREATE TABLE enquiry ( 
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        street_address VARCHAR(50) NOT NULL,
        city_town VARCHAR(50) NOT NULL,
        state VARCHAR(50) NOT NULL,
        postcode VARCHAR(50) NOT NULL,
        phone_num VARCHAR(50) NOT NULL,
        subject VARCHAR(50) NOT NULL,
        description VARCHAR(200),
        reg_date TIMESTAMP
        )";

        //Our SQL statement. This will empty / truncate the table "videos"
        mysqli_query($conn,'TRUNCATE TABLE admin');

        mysqli_close($conn);
    ?>