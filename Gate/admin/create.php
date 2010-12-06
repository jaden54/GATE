<?php
include("sqlconnect.php");

connect();
mysql_query("CREATE TABLE `qcm_notes` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`code` TINYTEXT NOT NULL ,
`user` TINYTEXT NOT NULL ,
`rep` TINYTEXT NOT NULL ,
`note` FLOAT NOT NULL ,
`vdate` TINYTEXT NOT NULL ,
`totpt` TINYINT NOT NULL
) ENGINE = MYISAM ;");
disconnect();


?>