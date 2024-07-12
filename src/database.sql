CREATE DATABASE IF NOT EXISTS tourism;
USE tourism;

CREATE TABLE IF NOT EXISTS`user` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `user_type` varchar(255),
  `fname` varchar(255),
  `lname` varchar(255),
  `email` varchar(255),
  `phone` varchar(255),
  `password` varchar(255),
  `rcvEmails` boolean,
  `CreatedAt` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Cities (
    city_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    country VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS Locations (
    location_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    city_id INT,
    FOREIGN KEY (city_id) REFERENCES Cities(city_id)
);

CREATE TABLE Hotels (
    hotel_id INT AUTO_INCREMENT PRIMARY KEY,
    entity_type VARCHAR(100),
    name VARCHAR(100),
    location_id INT,
    address VARCHAR(255),
    phone VARCHAR(50),
    email VARCHAR(100),
    FOREIGN KEY (location_id) REFERENCES Locations(location_id)
);

CREATE TABLE Restaurants (
    restaurant_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    location_id INT,
    address VARCHAR(255),
    phone VARCHAR(50),
    email VARCHAR(100),
    FOREIGN KEY (location_id) REFERENCES Locations(location_id)
);

CREATE TABLE Attractions (
    attraction_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    location_id INT,
    address VARCHAR(255),
    phone VARCHAR(50),
    email VARCHAR(100),
    FOREIGN KEY (location_id) REFERENCES Locations(location_id)
);

CREATE TABLE Bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    entity_type ENUM('hotel', 'restaurant', 'attraction'),
    entity_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    entity_type ENUM('hotel', 'restaurant', 'attraction'),
    entity_id INT,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    review_text TEXT,
    review_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    entity_type ENUM('hotel', 'restaurant', 'attraction'),
    entity_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Photos (
    photo_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    entity_type ENUM('hotel', 'restaurant', 'attraction'),
    entity_id INT,
    photo_url VARCHAR(255),
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

