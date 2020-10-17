USE zhatris;
SHOW TABLES;
CREATE TABLE `midterm_cars`(
    `CarID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `CarMake` varchar (60) NOT NULL,
    `CarModel` varchar (60) NOT NULL,
    `CarPrice` decimal (7,2) NOT NULL,
    `CarYear` int(20) ,
    PRIMARY KEY (`CarID`)
);
DESCRIBE `midterm_cars`;

INSERT INTO `midterm_cars`(
    `CarID`,
    `CarMake`,
    `CarModel`,
    `CarPrice`,
    `CarYear`
)
VALUES
(1,'Jeep','Grand Cherokee', '29900.00','2007'),
(2,'Dodge','Neon','5890.00','2005'),
(3,'Buick','Skylark','500.25','1985')



SELECT * FROM `midterm_cars`;