USE zhatris;
SHOW TABLES;

CREATE TABLE `Customer`(
   `CustomerID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `Name` VARCHAR(60) NOT NULL,
   `Address`       varchar(60) NOT NULL,
   `City`       varchar(60) NOT NULL,
   `State`      varchar (60) NOT NULL,
   `PhoneNumber` varchar(16) NOT NULL,
   `Notes`       varchar (200) NOT NULL,
   `Email`       varchar(200) NOT NULL,
   `Password`    varchar(60) NOT NULL,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`CustomerId`)
);
drop table `Customer`;
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

CREATE TABLE `order_items` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `order_id` int(14) NOT NULL,
  `item_number` int(4) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` decimal(9,2) NOT NULL,
  `price` decimal(9,2) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `orders` (
    `id` int(14) NOT NULL AUTO_INCREMENT,
    `date` datetime NOT NULL,
    `ship_fee` decimal(9,2) NOT NULL,
    `ship_name` varchar(255) NOT NULL,
    `Ship_street` varchar(255) NOT NULL,
    `ship_city` varchar(50) NOT NULL,
    `ship_state` varchar(50) NOT NULL,
    `sales_tax` float NOT NULL,
    `submitted` int(1) NOT NULL DEFAULT '0',
    `email` varchar(50) NOT NULL,
    `phone` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `Cart` (
    `cart_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `cart_qty` SMALLINT UNSIGNED NOT NULL,
    `item_name` varchar(150) NOT NULL,
    `item_price` Decimal (7,2) NOT NULL,
    `product_id` BIGINT UNSIGNED NOT NULL,
    `account_id` BIGINT UNSIGNED NOT NULL,
    `cart_data` LONGTEXT,
    `created_date` DATETIME NOT NULL,
    `updated_date` DATETIME NOT NULL,
    `removed_date` DATETIME default NULL,
    PRIMARY KEY (`cart_id`)
);

DROP TABLE `Cart`;
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

DROP TABLE `Customer`;
SELECT * FROM `Customer`;
SELECT * FROM `Product`;
SELECT * FROM `Contact`;
SELECT * FROM `Cart`;