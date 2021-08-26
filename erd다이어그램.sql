﻿CREATE TABLE `관리` (
	`position`	varchar(30)	NULL,
	`Key`	varchar(12)	NOT NULL,
	`Key2`	enum	NOT NULL,
	`ID`	varchar(18)	NULL,
	`Password`	varchar(18)	NULL
);

CREATE TABLE `Untitled10` (
	`Key`	varchar(12)	NOT NULL,
	`Key2`	enum	NOT NULL,
	`\`	varchar(20)	NULL,
	`Field`	varchar(10)	NULL,
	`Field2`	varchar(16)	NULL
);

CREATE TABLE `Untitled11` (
	`Key`	varchar(50)	NOT NULL,
	`Field`	varchar(10)	NULL,
	`Key22`	enum	NOT NULL,
	`Key2`	varchar(12)	NOT NULL,
	`Field2`	varchar(16)	NULL
);

CREATE TABLE `Untitled` (
	`Field3`	varchar(30)	NULL,
	`Key2`	varchar(18)	NOT NULL,
	`Key`	varchar(18)	NOT NULL,
	`Field`	date	NULL,
	`Field2`	int(9999)	NULL
);

CREATE TABLE `Untitled12` (
	`Key`	date	NOT NULL,
	`Field32`	varchar(30)	NULL,
	`Key2`	varchar(18)	NOT NULL,
	`Key3`	varchar(18)	NOT NULL,
	`Field2`	int(999)	NULL
);

CREATE TABLE `Untitled14` (
	`Key`	varchar(18)	NOT NULL,
	`Field`	varchar(18)	NULL
);

CREATE TABLE `Untitled15` (
	`Key`	varchar(18)	NOT NULL,
	`Field32`	varchar(30)	NULL,
	`Key2`	varchar(50)	NOT NULL,
	`Field3`	varchar(18)	NULL,
	`Field`	int(9999)	NULL
);

CREATE TABLE `Untitled16` (
	`Field3`	varchar(18)	NULL,
	`Field2`	int(9999)	NULL,
	`Field`	varchar(30)	NULL
);

CREATE TABLE `Untitled17` (
	`Field3`	varchar(18)	NULL,
	`Field`	varchar(30)	NULL,
	`Field5`	varchar(10)	NULL,
	`Field2`	varchar(30)	NULL,
	`Field4`	varchar(18)	NULL,
	`Field6`	varchar(10)	NULL
);

CREATE TABLE `Untitled18` (
	`Field32`	varchar(18)	NULL,
	`Field`	date	NULL,
	`Field3`	int(9999)	NULL,
	`Field4`	varchar(30)	NULL
);

CREATE TABLE `Untitled2` (
	`Key`	varchar(18)	NOT NULL,
	`Field`	varchar(18)	NULL,
	`Field3`	varchar(16)	NULL
);

CREATE TABLE `Untitled3` (
	`Field32`	varchar(18)	NULL,
	`Field`	date	NULL,
	`Field3`	int(9999)	NULL,
	`Key`	varchar(12)	NOT NULL,
	`Key2`	enum	NOT NULL
);

CREATE TABLE `Untitled4` (
	`Key`	enum	NOT NULL,
	`Field`	varchar(30)	NULL,
	`Field2`	enum	NULL
);

CREATE TABLE `Untitled5` (
	`Key`	varchar(18)	NOT NULL,
	`Field`	varchar(18)	NULL,
	`Field2`	varchar(16)	NULL
);

CREATE TABLE `Untitled13` (
	`Field32`	varchar(30)	NULL,
	`Key2`	varchar(18)	NOT NULL,
	`Key`	varchar(18)	NOT NULL,
	`Field`	date	NULL,
	`Field3`	int(9999)	NULL,
	`Field4`	int	NULL,
	`Field5`	int	NULL
);

CREATE TABLE `Untitled6` (
	`Key`	varchar(50)	NOT NULL,
	`Field3`	varchar(18)	NULL,
	`Field`	int(9999)	NULL
);

ALTER TABLE `관리` ADD CONSTRAINT `PK_관리` PRIMARY KEY (
	`position`,
	`Key`,
	`Key2`
);

ALTER TABLE `Untitled10` ADD CONSTRAINT `PK_UNTITLED10` PRIMARY KEY (
	`Key`,
	`Key2`
);

ALTER TABLE `Untitled11` ADD CONSTRAINT `PK_UNTITLED11` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled` ADD CONSTRAINT `PK_UNTITLED` PRIMARY KEY (
	`Field3`,
	`Key2`,
	`Key`
);

ALTER TABLE `Untitled12` ADD CONSTRAINT `PK_UNTITLED12` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled14` ADD CONSTRAINT `PK_UNTITLED14` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled15` ADD CONSTRAINT `PK_UNTITLED15` PRIMARY KEY (
	`Key`,
	`Field32`
);

ALTER TABLE `Untitled16` ADD CONSTRAINT `PK_UNTITLED16` PRIMARY KEY (
	`Field3`
);

ALTER TABLE `Untitled17` ADD CONSTRAINT `PK_UNTITLED17` PRIMARY KEY (
	`Field3`
);

ALTER TABLE `Untitled2` ADD CONSTRAINT `PK_UNTITLED2` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled4` ADD CONSTRAINT `PK_UNTITLED4` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled5` ADD CONSTRAINT `PK_UNTITLED5` PRIMARY KEY (
	`Key`
);

ALTER TABLE `Untitled13` ADD CONSTRAINT `PK_UNTITLED13` PRIMARY KEY (
	`Field32`,
	`Key2`,
	`Key`
);

ALTER TABLE `Untitled6` ADD CONSTRAINT `PK_UNTITLED6` PRIMARY KEY (
	`Key`,
	`Field3`
);

ALTER TABLE `관리` ADD CONSTRAINT `FK_Untitled10_TO_관리_1` FOREIGN KEY (
	`Key`
)
REFERENCES `Untitled10` (
	`Key`
);

ALTER TABLE `관리` ADD CONSTRAINT `FK_Untitled10_TO_관리_2` FOREIGN KEY (
	`Key2`
)
REFERENCES `Untitled10` (
	`Key2`
);

ALTER TABLE `Untitled10` ADD CONSTRAINT `FK_Untitled4_TO_Untitled10_1` FOREIGN KEY (
	`Key2`
)
REFERENCES `Untitled4` (
	`Key`
);

ALTER TABLE `Untitled` ADD CONSTRAINT `FK_Untitled2_TO_Untitled_1` FOREIGN KEY (
	`Key2`
)
REFERENCES `Untitled2` (
	`Key`
);

ALTER TABLE `Untitled` ADD CONSTRAINT `FK_Untitled14_TO_Untitled_1` FOREIGN KEY (
	`Key`
)
REFERENCES `Untitled14` (
	`Key`
);

ALTER TABLE `Untitled15` ADD CONSTRAINT `FK_Untitled5_TO_Untitled15_1` FOREIGN KEY (
	`Key`
)
REFERENCES `Untitled5` (
	`Key`
);

ALTER TABLE `Untitled15` ADD CONSTRAINT `FK_Untitled13_TO_Untitled15_1` FOREIGN KEY (
	`Field32`
)
REFERENCES `Untitled13` (
	`Field32`
);

ALTER TABLE `Untitled16` ADD CONSTRAINT `FK_Untitled17_TO_Untitled16_1` FOREIGN KEY (
	`Field3`
)
REFERENCES `Untitled17` (
	`Field3`
);

ALTER TABLE `Untitled13` ADD CONSTRAINT `FK_Untitled_TO_Untitled13_1` FOREIGN KEY (
	`Field32`
)
REFERENCES `Untitled` (
	`Field3`
);

ALTER TABLE `Untitled13` ADD CONSTRAINT `FK_Untitled_TO_Untitled13_2` FOREIGN KEY (
	`Key2`
)
REFERENCES `Untitled` (
	`Key2`
);

ALTER TABLE `Untitled13` ADD CONSTRAINT `FK_Untitled_TO_Untitled13_3` FOREIGN KEY (
	`Key`
)
REFERENCES `Untitled` (
	`Key`
);

ALTER TABLE `Untitled6` ADD CONSTRAINT `FK_Untitled11_TO_Untitled6_1` FOREIGN KEY (
	`Key`
)
REFERENCES `Untitled11` (
	`Key`
);

ALTER TABLE `Untitled6` ADD CONSTRAINT `FK_Untitled17_TO_Untitled6_1` FOREIGN KEY (
	`Field3`
)
REFERENCES `Untitled17` (
	`Field3`
);

