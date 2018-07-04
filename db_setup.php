<?php

include 'db_connect.php';

$sql = "CREATE TABLE `user` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(25) NOT NULL,
 `password` varchar(100) NOT NULL,
 `email` varchar(255) NOT NULL,
 `name` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `avote` ( `id` INT NOT NULL AUTO_INCREMENT , `pollId` VARCHAR(255) NOT NULL , `userid` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

$bdd->exec($sql);

$sql = "CREATE TABLE `polls` (
 `id` varchar(255) NOT NULL,
 `creatorId` int(25) NOT NULL,
 `title` varchar(255) NOT NULL,
 `displayresult` tinyint(1) NOT NULL DEFAULT '0',
 `enddate` date DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`),
 KEY `creatorId` (`creatorId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `modules` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pollId` varchar(255) NOT NULL,
 `question` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `options` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `moduleId` int(11) NOT NULL,
 `type` enum('radio','check','text','doodle') NOT NULL DEFAULT 'check',
 `maxrep` int(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `answers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `moduleId` varchar(255) NOT NULL,
 `data` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`),
 KEY `pollId` (`moduleId`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `votes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `userId` int(25) NOT NULL,
 `answerId` int(25) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`),
 KEY `userId` (`userId`,`answerId`),
 KEY `answerId` (`answerId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `friends` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`friend1` int(11) NOT NULL,
`friend2` int(11) NOT NULL,
`status` enum('pending','accepted','') NOT NULL DEFAULT 'pending',
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1";

$bdd->exec($sql);



?>
