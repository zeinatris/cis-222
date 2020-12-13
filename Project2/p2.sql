CREATE TABLE `locations` (
  `location_id` BIGINT NOT NULL AUTO_INCREMENT,
  `location_name` VARCHAR(32) NOT NULL,
  `location_phone` VARCHAR(50) NOT NULL,
  `create_date` DATETIME NOT NULL,
  `update_date` DATETIME NOT NULL,
  `delete_date` DATETIME DEFAULT NULL,
  PRIMARY KEY(`location_id`)
);
select * from locations;
CREATE TABLE `order_items` (

  `order_item_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` BIGINT UNSIGNED NOT NULL,
  `product_id` BIGINT UNSIGNED NOT NULL,
  `item_qty` SMALLINT UNSIGNED NOT NULL,
  `item_price` BIGINT UNSIGNED NOT NULL,
  `order_item_created_date` DATETIME NOT NULL,
  `order_item_updated_date` DATETIME NOT NULL,
  `order_item_deleted_date` DATETIME NOT NULL,
  PRIMARY KEY (`order_item_id`)
);
drop table `order_items`;
CREATE TABLE `Customer`(
 `CustomerID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
 `Email`       varchar(200) NOT NULL,
 `Password`    varchar(60) NOT NULL,
 `create_date` DATETIME NOT NULL,
 `update_date` DATETIME NOT NULL,
 `delete_date` DATETIME DEFAULT NULL,
 PRIMARY KEY (`CustomerId`)
);
drop table `locations`;
SHOW TABLES;

DESCRIBE `locations`;

select * from `Customer`;