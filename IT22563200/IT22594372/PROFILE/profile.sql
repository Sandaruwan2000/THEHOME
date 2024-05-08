CREATE TABLE Profile (
    
    name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,

    mobile_number VARCHAR(10) NOT NULL
);