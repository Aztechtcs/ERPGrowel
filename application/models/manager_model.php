<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * -- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;

DROP TABLE `SampleDb`.`packing_operation`;


DROP TABLE `SampleDb`.`sewing_operation`;


DROP TABLE `SampleDb`.`cutting_operation`;


DROP TABLE `SampleDb`.`oreder_require`;


DROP TABLE `SampleDb`.`order`;


DROP TABLE `SampleDb`.`sewing_reject`;


DROP TABLE `SampleDb`.`cutting_reject`;


DROP TABLE `SampleDb`.`suppler`;



-- ************************************** `SampleDb`.`sewing_reject`

CREATE TABLE `SampleDb`.`sewing_reject`
(
 `int`      INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`int`)
);





-- ************************************** `SampleDb`.`cutting_reject`

CREATE TABLE `SampleDb`.`cutting_reject`
(
 `id`       INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`)
);





-- ************************************** `SampleDb`.`suppler`

CREATE TABLE `SampleDb`.`suppler`
(
 `id`   INT NOT NULL ,
 `name` VARCHAR(45) NOT NULL ,

PRIMARY KEY (`id`)
);





-- ************************************** `SampleDb`.`order`

CREATE TABLE `SampleDb`.`order`
(
 `id`         INT NOT NULL ,
 `name`       VARCHAR(45) NOT NULL ,
 `size`       VARCHAR(5) NOT NULL ,
 `color`      VARCHAR(10) NOT NULL ,
 `Quantity`   INT NOT NULL ,
 `suppler_id` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_111` (`suppler_id`),
CONSTRAINT `FK_111` FOREIGN KEY `fkIdx_111` (`suppler_id`) REFERENCES `SampleDb`.`suppler` (`id`)
);





-- ************************************** `SampleDb`.`packing_operation`

CREATE TABLE `SampleDb`.`packing_operation`
(
 `id`        NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_154` (`order_id`),
CONSTRAINT `FK_154` FOREIGN KEY `fkIdx_154` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`sewing_operation`

CREATE TABLE `SampleDb`.`sewing_operation`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_176` (`order_id`),
CONSTRAINT `FK_176` FOREIGN KEY `fkIdx_176` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`cutting_operation`

CREATE TABLE `SampleDb`.`cutting_operation`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `Quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_172` (`order_id`),
CONSTRAINT `FK_172` FOREIGN KEY `fkIdx_172` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`oreder_require`

CREATE TABLE `SampleDb`.`oreder_require`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `name`     VARCHAR(45) NOT NULL ,
 `Quantity` DECIMAL NOT NULL ,
 `QM`       VARCHAR(45) NOT NULL COMMENT 'Quantity Masurmant i.e KG,MTR' ,
 `Price`    DECIMAL ,

PRIMARY KEY (`id`),
KEY `fkIdx_124` (`order_id`),
CONSTRAINT `FK_124` FOREIGN KEY `fkIdx_124` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





 
 */


class manager_model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'Asia/Kolkata');
    }
    
    
    
}