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
  `currency` VARCHAR(3) DEFAULT 'USD',
  `status` VARCHAR(255) DEFAULT 'unverified',
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
    `description` VARCHAR(1000),  
    `from` DATE,
    `to` DATE,
    `price` INT,  
    `rating` DECIMAL(3, 2) DEFAULT 0.00,
    `auto_reserve` TINYINT(1) DEFAULT 0,
     `status` ENUM('draft', 'listed', 'archived') DEFAULT 'draft',
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
    `entity_type` ENUM('hotel', 'restaurant', 'attraction', 'nid'),
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


CREATE TABLE IF NOT EXISTS `User_OTPs` (
  `otp_id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT,  -- Foreign key reference to the Users table
  `otp_code` VARCHAR(6),  -- The OTP code
  `expires_at` TIMESTAMP,  -- Expiry timestamp
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- When the OTP was generated
  `is_verified` BOOLEAN DEFAULT FALSE,  -- If the OTP was successfully used for verification
  FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`) ON DELETE CASCADE
);


CREATE OR REPLACE VIEW HotelDetails AS
SELECT 
    H.hotel_id,
    H.host_id,
    H.entity_type,
    H.name,
    H.location_id,
    H.accom_type,
    H.room_details,
    H.features,
    H.description,
    H.from ,
    H.to ,
    H.price,
    H.rating,
    H.auto_reserve,
    H.status,
    C.name AS city_name,
    C.country AS country_name,
    L.street,
    L.postal_code,
    L.link,  -- Including the link field from the Locations table
    -- Subquery to get the first photo URL for each hotel
    (SELECT P.photo_url 
     FROM Photos P 
     WHERE P.entity_id = H.hotel_id AND P.entity_type = 'hotel' 
     ORDER BY P.photo_id 
     LIMIT 1) AS first_photo_url
FROM 
    Hotels H
JOIN 
    Locations L ON H.location_id = L.location_id
JOIN 
    Cities C ON L.city_id = C.city_id
GROUP BY 
    H.hotel_id;



DELIMITER //

CREATE TRIGGER update_hotel_rating
AFTER INSERT ON Reviews
FOR EACH ROW
BEGIN
    IF NEW.entity_type = 'hotel' THEN
        UPDATE Hotels
        SET rating = (
            SELECT AVG(rating)
            FROM Reviews
            WHERE entity_id = NEW.entity_id
            AND entity_type = 'hotel'
        )
        WHERE hotel_id = NEW.entity_id;
    END IF;
END; //

DELIMITER ;