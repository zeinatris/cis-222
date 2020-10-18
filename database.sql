USE zhatris;
SHOW TABLES;

CREATE TABLE `Customer`(
   `CustomerID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `Name` VARCHAR(60) NOT NULL,
   `Address`       varchar(60) NOT NULL,
   `City`       varchar(60) NOT NULL,
   `State`      varchar (60) NOT NULL,
   `PhoneNumber` int NOT NULL,
   `Notes`       varchar (200) NOT NULL,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`CustomerId`)
);

CREATE TABLE `Product`(
   `ItemNumber` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `ItemName` VARCHAR(200) NOT NULL,
   `ItemDescription`   VARCHAR(200) NOT NULL,
   `ItemPrice`       Decimal (7,2) NOT NULL,
   `ItemQty`      int(11) NOT NULL,
   `Img` blob,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`ItemNumber`)
);

CREATE TABLE `Contact`(
   `ContactId` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `Name` VARCHAR(60) NOT NULL,
   `Email`       varchar(60) NOT NULL,
   `Message`       varchar(60) NOT NULL,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`ContactId`)
);

DESCRIBE `Customer`;
DESCRIBE `Product`;
DESCRIBE `Contact`;

INSERT INTO `Product`(
    `ItemNumber`,
    `ItemName`,
    `ItemDescription`,
    `ItemPrice`,
    `ItemQty`,
    `Img`,
    `create_date`,
    `update_date`,
    `delete_date`
)
VALUES
(1,'NBA 2K2O PS4','<p>This is brand new never been opened</p>','59.99','100','images/nba20.png',NOW(),NOW(),NULL),
(2,'MADDEN 20 PS4','<p>This is brand new never been opened</p>','59.99','10','images/madden20.png',NOW(),NOW(),Null),
(3,'FIFA 20 PS4','<p>This is brand new never been opened</p>','59.99','20','images/fifa20.png',NOW(),NOW(),NULL),
(4,'DARSIDERS III PS4','<p>This is brand new never been opened</p>','19.99','20','images/darksiders3.png',NOW(),NOW(),NULL),
(5,'CALL OF DUTY MW PS4','<p>This is brand new never been opened</p>','49.99','30','images/callofduty.png',NOW(),NOW(),NULL),
(6,'GTA V PS4','<p>This is brand new never been opened</p>','29.99','30','images/gtav.png',NOW(),NOW(),NULL);


SELECT * FROM `Customer`;
SELECT * FROM `Product`;
SELECT * FROM `Contact`;