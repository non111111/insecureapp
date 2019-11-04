CREATE DATABASE insecureapp;
USE insecureapp;
CREATE TABLE users (userid varchar(200), lastname varchar(200), firstname varchar(200), address varchar(200), phone varchar(200), password varchar(200));
INSERT INTO users VALUES ('101', 'Lim', 'Mark', '111 Abc Street', '0123456789', 'password01');
INSERT INTO users VALUES ('102', 'Custard', 'Sam', '222 Xyz Street', '2222222222', 'password02');
INSERT INTO users VALUES ('103', 'Jones', 'Henrietta', '333 Abc Street', '3333333333', 'password03');
CREATE USER 'insecureapp'@'localhost' IDENTIFIED BY '45EUlZOpL7';
GRANT ALL PRIVILEGES ON insecureapp.users TO 'insecureapp'@'localhost';