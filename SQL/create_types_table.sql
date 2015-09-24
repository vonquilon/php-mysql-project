CREATE TABLE IF NOT EXISTS types (
	typeId TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	type VARCHAR(20) NOT NULL DEFAULT '',
	CONSTRAINT unique_type UNIQUE(type)
);