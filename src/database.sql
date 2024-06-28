CREATE TABLE `user` (
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
