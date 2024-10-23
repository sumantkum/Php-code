CREATE DATABASE reservations;

USE reservations;

CREATE TABLE bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number VARCHAR(20) NOT NULL,
    start VARCHAR(50) NOT NULL,
    end VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    class VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE Registration(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULl,
    gender VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(150) NOT NULL,
    conform VARCHAR(150) NOT NULL,
)

CREATE TABLE Login(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(150) NOT NULL
)

