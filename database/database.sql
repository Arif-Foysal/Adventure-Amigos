CREATE DATABASE IF NOT EXISTS tourism;
USE tourism;

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_type` VARCHAR(255),
  `fname` VARCHAR(255),
  `lname` VARCHAR(255),
  `email` VARCHAR(255),
  `phone` VARCHAR(255),
  `password` VARCHAR(255),
  `rcvEmails` BOOLEAN,
  `CreatedAt` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `profile_photo_url` VARCHAR(255) NULL
);

CREATE TABLE IF NOT EXISTS `Cities` (
    `city_id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100),
    `country` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS `Locations` (
    `location_id` INT AUTO_INCREMENT PRIMARY KEY,
    `street` VARCHAR(500),
    `postal_code` VARCHAR(100),
    `description` TEXT,
    `link` TEXT,
    `city_id` INT,
    FOREIGN KEY (`city_id`) REFERENCES `Cities`(`city_id`)
);

CREATE TABLE IF NOT EXISTS `Hotels` (
    `hotel_id` INT AUTO_INCREMENT PRIMARY KEY,
    `host_id` INT,
    `entity_type` VARCHAR(100) DEFAULT 'hotel',
    `name` VARCHAR(100),
    `location_id` INT,
    `address` VARCHAR(255),
    `phone` VARCHAR(50),
    `email` VARCHAR(100),
    `accom_type` VARCHAR(100),
    `room_details` VARCHAR(1000),
    `features` VARCHAR(1000),
    
    FOREIGN KEY (`location_id`) REFERENCES `Locations`(`location_id`),
    FOREIGN KEY (`host_id`) REFERENCES `Users`(`user_id`)
 );

CREATE TABLE IF NOT EXISTS `Restaurants` (
    `restaurant_id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100),
    `location_id` INT,
    `address` VARCHAR(255),
    `phone` VARCHAR(50),
    `email` VARCHAR(100),
    FOREIGN KEY (`location_id`) REFERENCES `Locations`(`location_id`)
);

CREATE TABLE IF NOT EXISTS `Attractions` (
    `attraction_id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100),
    `location_id` INT,
    `address` VARCHAR(255),
    `phone` VARCHAR(50),
    `email` VARCHAR(100),
    FOREIGN KEY (`location_id`) REFERENCES `Locations`(`location_id`)
);

CREATE TABLE IF NOT EXISTS `Bookings` (
    `booking_id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,
    `entity_type` ENUM('hotel', 'restaurant', 'attraction'),
    `entity_id` INT,
    `booking_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `start_date` DATE,
    `end_date` DATE,
    FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`)
);

CREATE TABLE IF NOT EXISTS `Reviews` (
    `review_id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,
    `entity_type` ENUM('hotel', 'restaurant', 'attraction'),
    `entity_id` INT,
    `rating` INT CHECK (rating >= 1 AND rating <= 5),
    `review_text` TEXT,
    `review_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`)
);

CREATE TABLE IF NOT EXISTS `Photos` (
    `photo_id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,
    `entity_type` ENUM('hotel', 'restaurant', 'attraction'),
    `entity_id` INT,
    `photo_url` VARCHAR(255),
    `upload_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`)
);


-- Chat

CREATE TABLE IF NOT EXISTS `Messages` (
  `message_id` INT AUTO_INCREMENT PRIMARY KEY,
  `sender_id` INT,
  `receiver_id` INT,
  `message_text` TEXT,
  `sent_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `status` ENUM('sent', 'delivered', 'read') DEFAULT 'sent',
  FOREIGN KEY (`sender_id`) REFERENCES `Users`(`user_id`),
  FOREIGN KEY (`receiver_id`) REFERENCES `Users`(`user_id`)
);

CREATE TABLE IF NOT EXISTS `SentPhotos` (
  `photo_id` INT AUTO_INCREMENT PRIMARY KEY,
  `message_id` INT,
  `photo_url` VARCHAR(255) NOT NULL,
  `uploaded_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`message_id`) REFERENCES `Messages`(`message_id`) ON DELETE CASCADE
);
