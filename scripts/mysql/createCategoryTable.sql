#createCategoryTable.sql

DROP TABLE IF EXISTS `my_Category`;
CREATE TABLE `my_Category`
(
    `catCode` VARCHAR(3) NOT NULL,
    `catName` VARCHAR(25) NOT NULL,
    PRIMARY KEY(`catCode`)
);