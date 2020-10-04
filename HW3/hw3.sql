USE zhatris;
SHOW TABLES;

CREATE TABLE `Persons` (
   `PersonID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
   `FirstName` VARCHAR(60) NOT NULL,
   `LastName` VARCHAR(60) NOT NULL,
   `Address`       varchar(60) NOT NULL,
   `City`       varchar(60) NOT NULL,
   `admin` BOOL DEFAULT FALSE,
   `create_date` DATETIME NOT NULL,
   `update_date` DATETIME NOT NULL,
   `delete_date` DATETIME DEFAULT NULL,
   PRIMARY KEY (`PersonID`)
);

CREATE TABLE `Players` (
    `PlayersId` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Height` VARCHAR(60) NOT NULL,
    `Weight` INT NOT NULL,
    `JerseySize`       varchar(30) NOT NULL,
    `ShortsSize`       varchar(30) NOT NULL,
    `admin` BOOL DEFAULT FALSE,
    `create_date` DATETIME NOT NULL,
    `update_date` DATETIME NOT NULL,
    `delete_date` DATETIME DEFAULT NULL,
     PRIMARY KEY (`PlayersId`)
);

CREATE TABLE `Employees` (
    `EmployeeId` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `EmpFirstName` VARCHAR(60) NOT NULL,
    `EmployeeLastName` VARCHAR(60) NOT NULL,
    `EmpEmail`            varchar(60) NOT NULL,
    `EmpAge`              INT NOT NULL,
    `EmpYearsofEmploment` varchar(30) NOT NULL,
    `admin` BOOL DEFAULT FALSE,
    `create_date` DATETIME NOT NULL,
    `update_date` DATETIME NOT NULL,
    `delete_date` DATETIME DEFAULT NULL,
    PRIMARY KEY (`EmployeeId`)
);

DESCRIBE `Persons`;
DESCRIBE `Players`;
DESCRIBE `Employees`;

INSERT INTO `Persons`
(`PersonID`,
 `FirstName`,
 `LastName`,
 `Address`,
 `City`,
 `create_date`,
 `update_date`,
 `delete_date`
 );

 INSERT INTO `Players`
 (`PlayersId`,
  `Height`,
  `Weight`,
  `JerseySize`,
  `ShortsSize`,
  `create_date`,
  `update_date`,
  `delete_date`
  );

INSERT INTO `Employees`
(`EmployeeId`,
 `EmpFirstName`,
 `EmployeeLastName`,
 `EmpEmail`,
 `EmpAge`,
 `EmpYearsofEmploment`,
 `create_date`,
 `update_date`,
 `delete_date`
 );

UPDATE `Persons`;
UPDATE `Players`;
UPDATE `Employees`;

DELETE FROM Persons WHERE FirstName = 'Zein';

SELECT * FROM `Persons`;
SELECT `PersonsId`, `email` FROM users;



