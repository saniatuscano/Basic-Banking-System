create database tsf;
create table clients(
c_id int(3) PRIMARY KEY AUTO_INCREMENT,
    c_name varchar(20) NOT NULL,
    c_mail varchar(20) UNIQUE,
    c_balance int(10) NOT NULL
    );
    
INSERT INTO `clients`(`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES 
	(101,'Sania','sania@gmail.com',100000),
    (102,'Lyeen','lyeen@gmail.com',70000),
    (103,'Shaun','shaun@gmail.com',55000),
    (104,'Selvin','selvin@gmail.com',25000),
    (105,'Quincy','quincy@gmail.com',75000),
    (106,'Seniya','seniya@gmail.com',65000),
    (107,'Ross','ross@gmail.com',32000),
    (108,'Greatson','greatson@gmail.com',5500),
    (109,'Noela','noela@gmail.com',8500),
    (110,'Grace','grace@gmail.com',65000)
    ;

CREATE TABLE transaction (
  sr_no int(3) PRIMARY KEY AUTO_INCREMENT,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(10) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp()
);


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

COMMIT
