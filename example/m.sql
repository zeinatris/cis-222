USE zhatris;
SHOW TABLES;
CREATE TABLE `P`(
`cId` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
`NAME` varchar (30) NOT NULL,
`Email` varchar (30) NOT NULL,
primary key (`cId`)
);
DESCRIBE `P`;
SELECT * FROM `P`;

DROP TABLE `P`