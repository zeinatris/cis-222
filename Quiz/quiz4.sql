/**
 * qz4.txt
 *
 * Quiz 4 is a few SQL commands, feel free to convert this to a .sql file if needed to test.
 *
 * @category   SQL
 * @package    Quiz 4
 * @author     Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.10.08
 * @grad	8.5 / 10
 */

/* 4 pts
1. Your IT department has been tasked with keeping track of all hardware in your organizations.
	Create a database table to store this information in. All future queries in this quiz will refer to this table.
	Name the table hardware and give it 8 fields, the field information is below.
		hardware_id is a whole number that can get very large, it should be the automatically increasing primary key of the table.
		user_id is also a whole number that can get very large, it should link to the id of the user who owns the device.
		value should track the cost or value of the machine.
		serial_num is a string of numbers and letters used to identify the machine by the manufacturer.
		notes should store any amount of text based notes about the machine, such is if it went for service or has a virus.
		created_date should store when the machine was purchased, so this field should never be null.
		updated_date should store when the machine was modified, this field can be null by default.
		deleted_date should store when the machine was retired, so null by default.
*/
USE zhatris;
SHOW TABLES;

CREATE TABLE `Hardware` (
   `Hardware_Id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `User_Id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `Value`  decimal (7,2) NOT NULL,
   `Serial_Num` VARCHAR(60) NOT NULL,
   `Notes`       varchar(200) NOT NULL,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`Hardwar_Id`)
);

-- 3 pts
-- 2. Write an insert statement that will insert 3 rows of data into this table.
-- You can make the data up but it should make sense. Feel free to ask me if you need an examples.
INSERT INTO `Hardware`
(`Hardware_Id`, `User_Id`, `Value`, `Serial_Num`, `Notes`, `create_date`, `update_date`,`delete_date`)
VALUES
(NULL, 1 ,'299.99',12345,'service',NOW(),NOW(), NULL),
(NULL ,2,'499.99',23456,'virus', NOW(),NOW(),NULL),
(NULL ,3,'110.99',246823,'service',NoW(),NOW(),NULL)

-- 1 pts
-- 3. Write an update statement that will retire any machine that has a hardware id value of 4.
-- This is done by populating the retire date field and adding a note that says "RETIRED!"
UPDATE `Hardware`
SET `Notes` = "RETIRED!"
WHERE `Value` = 4;

-- 0.5/1 pts
-- 4. Write a select statement that will show me the top 5 most expensive pieces of hardware, but do not include any that are retired.
SELECT * FROM `Hardware` WHERE `Notes` NOT LIKE "RETIRED!"
ORDER BY `Value` DESC LIMIT 5 ;
-- 0/1 pt
-- 5. Which engine did I go over that is newer and more efficient than MyISAM?
InnoDB

-- 0/1 pt
-- Ex: Write a single SWL statement that will remove all the data from your table and reset the auto_increment to 1
--     Do this without the use of the DROP key word.
TRUNCATE TABLE `Hardware`;
