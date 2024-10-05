/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
CREATE TABLE teaandCoffeeAccessoriesManagers(teaandCoffeeAccessoriesManagerID INT(11) NOT NULL AUTO_INCREMENT, emailAddress VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(64) NOT NULL, pronouns VARCHAR(60) NOT NULL, firstName VARCHAR(60) NOT NULL, lastName VARCHAR(60) NOT NULL, dateCreated DATETIME NOT NULL, PRIMARY KEY (teaandCoffeeAccessoriesManagerID));

INSERT INTO teaandCoffeeAccessoriesManagers(emailAddress, password, pronouns, firstName, lastName, dateCreated)VALUES('sam@accessoriesshop.com', SHA2('cookie@0', 256), 'She/Her', 'Samantha', 'Soni', NOW());

INSERT INTO teaandCoffeeAccessoriesManagers(emailAddress, password, pronouns, firstName, lastName, dateCreated)VALUES('bobby@accessoriesshop.com', SHA2('tea@0', 256), 'He/Him', 'Bobby', 'Jones', NOW());

INSERT INTO teaandCoffeeAccessoriesManagers(emailAddress, password, pronouns, firstName, lastName, dateCreated)VALUES('smith@accessoriesshop.com', SHA2('coffee@0', 256), 'He/Him', 'Smith', 'Swift', NOW());

Select * from teaandCoffeeAccessoriesManagers;