CREATE DATABASE striferral
DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE `admin`(  
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    `username` varchar(20) NOT NULL,
    `role` varchar(20) NOT NULL,
    `create_time` DATETIME COMMENT 'Create Time',
    `update_time` DATETIME COMMENT 'Update Time',
    `First_Name` varchar(100) NOT NULL,
    `Last_Name` varchar(100) NOT NULL,
    `Email` varchar(100) NOT NULL,
    `Password` int(100) NOT NULL,
    `File` varchar(100) NOT NULL
) ENGINE='InnoDB' DEFAULT CHARSET='utf8mb4';

