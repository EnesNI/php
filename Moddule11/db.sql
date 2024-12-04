CREATE DATABASE user_dashboard;

USE user_dashboard;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO users(username, email)
VALUE
("user1", "user1@gamil.com"),
("user2", "user2@gamil.com"),
("user3", "user3@gamil.com"),
("user4", "user4@gamil.com");
