USE zhatris;
SHOW TABLES;
CREATE TABLE `Midterm_Animals`(
    `AnimalId` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `AnimalType` varchar (60) NOT NULL,
    `AnimalBreed` varchar (60) NOT NULL,
    `CheckedIn` VARCHAR(20) ,
    `CheckedOut` DATETIME DEFAULT NULL ,
    PRIMARY KEY (`AnimalId`)
);
DESCRIBE `Midterm_Animals`;

INSERT INTO `Midterm_Animals`(
    `AnimalId`,
    `AnimalType`,
    `AnimalBreed`,
    `CheckedIn`,
    `CheckedOut`
)
VALUES
(1,'Dog','Golden',NOW(), NULL),
(2,'Cat','Tabbi',NOW(),NULL),
(3,'Reptile','Turtle',NOW(),NULL);



SELECT * FROM `Midterm_Animals`;