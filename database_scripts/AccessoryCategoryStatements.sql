/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
CREATE TABLE AccessoryCategories (AccessoryCategoryID INT(11) NOT NULL,AccessoryCategoryCode VARCHAR(255) NOT NULL UNIQUE,AccessoryCategoryName VARCHAR(255) NOT NULL, ShelfNumber INT(11) NOT NULL, DateCreated DATETIME NOT NULL, PRIMARY KEY ( AccessoryCategoryID ));

INSERT INTO AccessoryCategories(AccessoryCategoryID, AccessoryCategoryCode, AccessoryCategoryName,ShelfNumber, DateCreated)VALUES(100, 'KET', 'Electric-Kettle',1, NOW());
INSERT INTO AccessoryCategories(AccessoryCategoryID, AccessoryCategoryCode, AccessoryCategoryName,ShelfNumber, DateCreated)VALUES(200, 'FPS', 'French Press',5, NOW());
INSERT INTO AccessoryCategories(AccessoryCategoryID, AccessoryCategoryCode, AccessoryCategoryName,ShelfNumber, DateCreated)VALUES(300, 'TIS', 'Tea Infuser Set',2,NOW());
INSERT INTO AccessoryCategories(AccessoryCategoryID, AccessoryCategoryCode, AccessoryCategoryName,ShelfNumber, DateCreated)VALUES(400, 'CGR', 'Coffee Grinder',3, NOW());
INSERT INTO AccessoryCategories(AccessoryCategoryID, AccessoryCategoryCode, AccessoryCategoryName,ShelfNumber, DateCreated)VALUES(500, 'CBM', 'Cold Brew Coffee Maker',7, NOW());
SELECT*FROM `AccessoryCategories`;