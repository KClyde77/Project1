create database phpregistration;
use phpregistration;
CREATE TABLE users(

usersName VARCHAR(255) NOT NULL,

usersEmail VARCHAR(255) NOT NULL,

usersUid VARCHAR(255) NOT NULL,

usersPwd VARCHAR(255) NOT NULL UNIQUE,

primary key (usersEmail)
);

select * from users;

ALTER TABLE users ADD UserId VARCHAR(255) NOT NULL; 